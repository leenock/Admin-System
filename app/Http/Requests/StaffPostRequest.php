<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\Permission\Models\Role;

class StaffPostRequest extends FormRequest
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
            //

            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required',



        ];
    }

    public function messages()
        {

            return [

                'name.required' => 'Staff name is required',
                'email.required' => 'Staff email is required',
                'password.required' => 'password is required',
                'roles.required' => 'role is required',




            ];

        }
        public function attributes()
            {
                return [
                    'email' => 'email address',
                ];
            }

}
