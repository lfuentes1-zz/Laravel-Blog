<?php 

class Post extends BaseModel {

	protected $table = 'posts';

	public static $rules = array (
		'post-title' => 'required|min:2|max:100',
		'post-body' => 'required|max:10000'

		);

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function categories()
	{
		return $this->belongsToMany('Category');
	}
	//allows for mass filling and thus the usage of create instead of new for objects
	// protected $fillable = array('title', 'body');
}