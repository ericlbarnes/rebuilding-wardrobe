<?php namespace Wardrobe\Drawer\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WardrobeRequest extends FormRequest {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Redirect to admin login if not validated.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function forbiddenResponse()
	{
		return $this->redirector->route('wardrobe.admin');
	}
} 