<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DummyPostRequest extends FormRequest
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
            'name' => 'required|string',
            'detail' => 'required|string|max:100',
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */

public function messages()
{
    return [
        'name.required' => 'Dummy  name  is required',
        'detail.required' => 'Dummy details is required',
     ];
}

}
