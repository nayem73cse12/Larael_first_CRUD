<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateTaskRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	
	public function rules()
	{
		return [
			'workName'=>'required | min:3'
		];
	}

}
