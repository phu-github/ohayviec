<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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
            'name' => 'required',
            'email'=>'required|unique:users,email',
            'pass' => 'required|confirmed',
            'pass_confirmation' => 'required'
        ];

    }
     public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên!',
            'email.required'=>'Vui lòng nhập email', 
            'email.unique'=> 'Email đã tồn tại!',
            'pass.required'=> 'Vui lòng nhập mật khẩu!',
            'pass.confirmed' =>'Mật khẩu không trùng khớp, vui lòng nhập lại!',
            'pass_confirmation.required'=>'Nhập lại nhập khẩu trống!',
        ];
    }
}
