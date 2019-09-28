<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest
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
            'name' => 'required|min:5|max:10'
        ];
    }
    public function messages()
    {
        $messages = [
            'name.required' => 'Tên là bắt buộc',
            'name.min' => 'Tên tối thiểu 5 kí tự',
            'name.max' => 'Tên tối đa 10 kí tự'
        ];
        return $messages;
    }
}
