<?php

class DataInfo extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    protected $table = 'dataInfo';
    protected $primaryKey = 'dataInfoid';

    public function dataColumn()
    {
        return $this->belongsTo('DataColumns', 'columnDataID');
    }
}
