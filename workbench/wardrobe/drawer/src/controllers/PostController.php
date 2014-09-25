<?php namespace Wardrobe\Drawer\Controllers;

use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Wardrobe\Drawer\Http\Requests\CreatePostRequest;
use Wardrobe\Drawer\Repositories\PostRepositoryInterface;

class PostController extends Controller {

	/**
	 * @var PostRepositoryInterface
	 */
	private $posts;

	/**
	 * @param PostRepositoryInterface $posts
	 */
	public function __construct(PostRepositoryInterface $posts)
	{
		$this->posts = $posts;
	}

	/**
	 * Show a list of all the posts
	 *
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		$posts = $this->posts->allPaged();
		return view('wardrobe::admin.post.grid', compact('posts'));
	}

	/**
	 * Show the create form
	 *
	 * @return \Illuminate\View\View
	 */
	public function create()
	{
		return view('wardrobe::admin.post.form');
	}

	/**
	 * Store the post
	 *
	 * @param CreatePostRequest $request
	 */
	public function store(CreatePostRequest $request)
	{
		$date = ($request->get('publish_date') == "") ? "Now" : $request->get('publish_date');

		$post = $this->posts->create([
			'title' => $request->get('title'),
			'content' => $request->get('content'),
			'link_url' => $request->get('link_url'),
			'type' => $request->get('type', 'text'),
			'image' => $request->get('image', ''),
			'active' => (bool) $request->get('active', 1),
			'user_id' => $request->get('user_id', 1),
			'publish_date' => Carbon::createFromTimestamp(strtotime($date))
		]);

		return $request->redirector->route('admin.posts');
	}
} 