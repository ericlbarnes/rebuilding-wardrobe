<?php namespace Wardrobe\Drawer\Repositories;

interface PostRepositoryInterface {

	/**
	 * Get a Post by its primary key.
	 *
	 * @param  int   $id
	 * @return Post
	 */
	public function find($id);

	/**
	 * Get a Post by its slug
	 *
	 * @param  string   $slug
	 * @return Post
	 */
	public function findBySlug($slug);

	/**
	 * Create a new post.
	 *
	 * @param  array $data
	 * @return Post
	 */
	public function create(array $data);

	/**
	 * Update a post's title and content.
	 *
	 * @param  array $data
	 * @return Post
	 */
	public function update(array $data);

	/**
	 * Delete the post with the given ID.
	 *
	 * @param  int  $id
	 * @return void
	 */
	public function delete($id);

} 