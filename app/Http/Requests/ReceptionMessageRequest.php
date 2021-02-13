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
        'lastName' => ['required','string','regex:/[^\d]$/'],
        'firstName' => ['required','string','regex:/[^\d]$/'],
        'fatherName' => ['nullable','string'],
        'message' => [ 'required','string','max:2500'],
        'email' => ['min:2','max:255','email','nullable'],
        'phone' => ['required','min:11','max:25','regex:/^(?:\+|\d){1}[\d\-\(\) ]{10,}$/'],
        'consent' => ['required','accepted'],
        'job' => [ 'min:5','max:255','nullable'],
        'captcha' => ['required','captcha'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return ['consent.accepted'  => 'Необходимо согласие с обработкой данных'];
    }

    protected function failedValidation(Validator $validator)
    {
    throw new HttpResponseException(response()->json(['errors'=>$validator->errors()], 200));
    }

}