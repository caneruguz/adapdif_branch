<?php

class DataImportContoller extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('data1');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$data = new StudentData( Input::all() );

		if( $data->upload() ) {
			Session::set('data', serialize($data));
			return Redirect::to('upload2');
		}

		return Redirect::to('/');

	}

	public function store2()
	{
		$data = unserialize( Session::get('data') );

		$firstRow   = $data->parseHeader();
		$sampleRows = $data->getSampleRows();

		return View::make('data2')->with('firstRow', $firstRow)
								  ->with('sampleRows', $sampleRows);
	}

	public function save()
	{
		$rules = array('studentID' => 'required');

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails())
	    {
	        return Redirect::to('upload2')->withErrors($validator);
	    }

		$data = unserialize( Session::get('data') );

		$data->saveData( Input::get('studentID'), Input::get('included') );

		return Redirect::to('data3');
	}

	public function dataView($id)
	{
		$data = DataImport::with('dataColumns', 'dataColumns.dataInfo')->find($id);

		return View::make('view')->withData($data);
	}

}
