<?php namespace Wardrobe\Drawer\Repositories;

use Event;
use Wardrobe\Drawer\Entities\Post;

class DbPostRepository implements PostRepositoryInterface {

	/**
	 * @var Post
	 */
	private $post;

	/**
	 * @param Post $post
	 */
	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	/**
	 * Get a Post by its primary key.
	 *
	 * @param  int $id
	 *
	 * @return Post
	 */
	public function find($id)
	{
		return $this->post->findOrFail($id);
	}

	/**
	 * Get a Post by its slug
	 *
	 * @param  string $slug
	 *
	 * @return Post
	 */
	public function findBySlug($slug)
	{
		return $this->post
			->where('active', 1)
			->where('publish_date', '<=', new Carbon)
			->where('slug', $slug)
			->first();
	}

	/**
	 * Create a new post.
	 *
	 * @param  array $data
	 *
	 * @return Post
	 */
	public function create(array $data)
	{
		$post = $this->post->create($data);

		Event::fire('post.create', $post);

		return $post;
	}

	/**
	 * Update a post's title and content.
	 *
	 * @param  array $data
	 *
	 * @return Post
	 */
	public function update(array $data)
	{
		// TODO: Implement update() method.
	}

	/**
	 * Delete the post with the given ID.
	 *
	 * @param  int $id
	 *
	 * @return void
	 */
	public function delete($id)
	{
		// TODO: Implement delete() method.
	}

} 