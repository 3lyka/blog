<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
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
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required | string',
			'email' => 'required | string|email|unique:users',
		];
	}

	public function messages()
	{
		return [
			'name.required' => 'Это поле необходимо заполнить',
			'name.string' => 'Имя должно быть строкой',
			'name.unique' => 'Пользователь с таким именем уже существует',
			'email.required' => 'Ваша почта должна соотвествовать формату mail@mail.domain',
			'email.string' => 'email должен быть строкой',
			'email.unique' => 'Пользователь с таким email уже существует',
		];
	}
}
