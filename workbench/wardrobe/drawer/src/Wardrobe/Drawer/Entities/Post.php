<?php namespace Wardrobe\Drawer\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = array('title', 'slug', 'content', 'image', 'type', 'link_url', 'active', 'publish_date', 'user_id');


	public function getDates()
	{
		return ['created_at', 'updated_at', 'publish_date'];
	}

	/**
	 * Set an active scope
	 *
	 * @param $query
	 * @return mixed
	 */
	public function scopeActive($query)
	{
		return $query->where('active', 1)->where('publish_date', '<=', new Carbon);
	}

	/**
	 * Tags relationship
	 *
	 * @return mixed
	 */
	public function tags()
	{
		return $this->belongsToMany('Tag', 'post_tags');
	}

}