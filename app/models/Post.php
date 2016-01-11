<?php 

class Post extends Eloquent {

	protected $table = 'posts';

	//allows for mass filling and thus the usage of create instead of new for objects
	// protected $fillable = array('title', 'body');
}