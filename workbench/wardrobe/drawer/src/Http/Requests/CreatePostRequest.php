<?php namespace Wardrobe\Drawer\Http\Requests;

class CreatePostRequest extends WardrobeRequest {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title' => 'required',
			'content' => 'required',
		];
	}

} 