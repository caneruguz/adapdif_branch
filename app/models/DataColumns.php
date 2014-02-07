<?php

class DataColumns extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    protected $table = 'dataColumns';
    protected $primaryKey = 'columnID';

    public function dataImport()
    {
        return $this->belongsTo('DataImport');
    }

    public function dataInfo()
    {
        return $this->hasMany('DataInfo', 'dataColumnID', 'columnID');
    }
}
