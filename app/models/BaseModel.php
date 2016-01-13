<?php 

use Carbon\Carbon;

class BaseModel extends Eloquent {

	//accessor is on the get
	public function getCreatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago');
	}	

	//accessor is on the get
	public function getUpdatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago');
	}	

	//mutator
	// public function setTitleAttribute($value)
	// {
	//add a slug field in the migration file and not in the seeder
	// 	// after having a slug field in db, this is setting title attribute and slug with only title field being assigned
	// 	$this->attribute['title'] = $value;
	// 	$this->attribute['slug'] = Str::slug($value);
	// }

}