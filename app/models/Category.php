<?php 

class Category extends Eloquent {

	protected $table = 'categories';

	public function users() 
	{
		return $this->belongsToMany('User');
	}
}