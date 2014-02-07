<?php

class StudentData {

    public $file;
    public $fileName;
    public $fileExtension;
    public $savePath;
    public $includedColumns;
    public $studentIDcolumn;
    public $dataTitle;
    public $dataName;
    public $dataType;
    public $dataDate;
    public $isFirstRowHeader;
    public $sheet;
    public $dataImport;
    public $allowedExtensions = array ('.csv', '.xls', '.xlsx');

    public function __construct( $input )
    {
        //file properties
        $this->file          = $input['file'];
        $this->fileName      = $this->file->getClientOriginalName();
        $this->fileExtension = $this->file->getClientOriginalExtension();
        $this->uploadDestinationPath = 'uploads/'.str_random(8);
        $this->savePath      = $this->uploadDestinationPath . '/' . $this->fileName;

        //input metadata
        $this->dataName = ( isset($input['dataName']) ) ?: '';

        $dataType = (isset($input['dataType'])) ?: '';
        $this->dataType = serialize( $dataType );
        $this->dataDate = ( isset($input['dataDate']) ) ?: \Carbon\Carbon::now();
        $this->isFirstRowHeader = (isset($input['firstRowHeader'])) ?: '';
    }

    public function upload( )
    {
        //check if it's an allowed extension
        $this->isAllowedExtension();

        if( $this->file ) {

            $uploadSuccess = $this->file->move($this->uploadDestinationPath, $this->fileName);

            if( $uploadSuccess ) {
                unset($this->file);
                //phpExcel
                $objPHPExcel = PHPExcel_IOFactory::load( $this->savePath );
                $this->sheet = $objPHPExcel->getActiveSheet();

                return true;
            }
        }

        return false;
    }

    private function isAllowedExtension()
    {
        if( in_array($this->fileExtension, $this->allowedExtensions))
            return true;

        return false;
    }

    public function parseHeader()
    {
        //read first row
        $firstRow = $this->sheet->getRowIterator(1)->current();
        $cellIterator = $firstRow->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(false);

        return $cellIterator;
    }

    public function getSampleRows($numberOfRows = 5)
    {
        $allRows = $this->sheet->getRowIterator(2);
        foreach ($allRows as $key => $row) {
            $cellIterator = $row->getCellIterator();
                foreach ($cellIterator as $cell) {
                    $rows[$key][] = $cell->getValue();
                }
            if( $key == $numberOfRows ) break;
        }

        return $rows;
    }

    public function saveDataImport()
    {
                $d = new DataImport();
                $d->dataTitle = $this->dataTitle;
                $d->dataDate  = $this->dataDate;
                $d->dataType  = $this->dataType;

                $d->dataUser  = (isset(Auth::user()->id)) ?: 0;
                $d->dataFile  = $this->savePath;
                $d->dataFirstRowHeader = $this->isFirstRowHeader;

                $d->save();

                $this->dataImport = $d;
    }

    public function saveData( $studentIDCoordinates, $includedColumns )
    {
        //save metadata
        $this->saveDataImport();

        $studentID = $this->sheet->getCell($studentIDCoordinates);
        $this->studentIDcolumn = $studentID->getColumn();


        $lastColumn = $this->sheet->getHighestDataColumn();

        for ($column = 'A'; $column != $lastColumn; $column++) {

            //if the user wants to import this column
            if( in_array($column, $includedColumns) )
            {
                $allRows = $this->sheet->getRowIterator();
                foreach ($allRows as $key => $row) {
                    $cell = $this->sheet->getCell($column.$key);

                    if( $key == 1) {
                        $dataColumn = $this->saveDataColumn( $cell );
                    }
                    else {
                        $this->saveDataInfo( $dataColumn, $cell, $key );
                    }

                }
            }
        }
    }

    public function saveDataColumn( $cell )
    {
        $dataColumn = new DataColumns;
        $dataColumn->columnName = $cell->getValue();
        $this->dataImport->dataColumns()->save($dataColumn);

        return $dataColumn;
    }

    public function saveDataInfo( $dataColumn, $cell, $key )
    {
        $dataInfo = new DataInfo;
        $dataInfo->dataColumnID = $dataColumn->dataColumnID;
        $dataInfo->dataContent = $cell->getValue();

        $studentIDCell = $this->sheet->getCellByColumnAndRow($this->studentIDcolumn, $key);
        $dataInfo->dataStudentID = $studentIDCell->getValue();
        $dataColumn->dataInfo()->save($dataInfo);
    }
}