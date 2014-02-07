<?php

class DataColumns extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    protected $table = 'dataColumns';
    protected $primaryKey = 'dataColumnID';

    public function dataImport()
    {
        return $this->belongsTo('DataImport');
    }

    public function dataInfo()
    {
        return $this->hasOne('DataInfo', 'dataColumnID');
    }
}
