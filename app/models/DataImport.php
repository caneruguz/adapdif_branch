<?php

class DataImport extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    protected $table = 'dataImport';
    protected $primaryKey = 'dataID';

    public function dataColumns()
    {
        return $this->hasMany('DataColumns', 'columnDataID', 'dataID');
    }
}
