<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required|max:10|min:2',
            'email' => 'required|email',
            'dob' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.max' => 'Tên có tối đa 10 ký tự',
            'name.min' => 'Tên có ít nhất 2 kí tự',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email phải đúng định dạng',
            'dob.required' => 'Ngày sinh không được để trống'];
    }
}
