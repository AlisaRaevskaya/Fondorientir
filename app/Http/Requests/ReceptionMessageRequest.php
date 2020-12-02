<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


use Illuminate\Foundation\Http\FormRequest;

class ReceptionMessageRequest extends FormRequest
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
        'lastName' => 'required|min:2|max:255|regex:/^[a-zA-Z]{2,}/',
        'firstName' => 'required|min:2|max:255|regex:/^[a-zA-Z]{2,}/',
        'fatherName' => 'required|min:2|max:255|regex:/^[a-zA-Z]{2,}/',
        'message' => 'required|string|min:8|max:500',
        'email' => 'required|min:2|max:255|email',
        'phone' => 'required|min:2|max:255|regex:/^(?:\+|\d)[\d\-\(\) ]{9,}\d$/',
        'consent' => 'required|boolean|accepted',
        'job' => 'min:5|max:255|nullable',
        'address' => 'required|min:2|max:255'
        ];
    }


    // /**
    //  * Get the error messages for the defined validation rules.
    //  *
    //  * @return array
    //  */
    // public function messages()
    // {
    //     return [
    //     'name.required' => 'A title is required',
    //     'content.required'  => 'A message is required',
    // ];
    // }

    protected function failedValidation(Validator $validator)
    {
    throw new HttpResponseException(response()->json(['errors'=>$validator->errors()], 200));
    }

}
