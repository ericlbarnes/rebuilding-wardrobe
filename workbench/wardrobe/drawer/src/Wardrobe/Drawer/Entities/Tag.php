<?php namespace Wardrobe\Drawer\Entities;

class Tag extends Model {

	protected $table = 'tags';

	public function posts()
	{
		return $this->belongsToMany('Post', 'post_tags');
	}
}