<?php namespace Wardrobe\Drawer\Entities;

class Post extends Model {

	protected $table = 'posts';

	public function tags()
	{
		return $this->belongsToMany('Tag', 'post_tags');
	}

}