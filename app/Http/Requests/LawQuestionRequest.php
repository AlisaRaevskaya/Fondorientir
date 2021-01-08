<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class LawQuestionRequest extends FormRequest
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
        'name' => ['required','min:2','max:30','regex:/[a-zA-Zа-яА-Я\s\\-]{2,30}$/'],
        'message' => ['required','string','min:10','max:500'],
        'phone' => ['required','min:11','max:25','regex:/^(?:\+|\d){1}[\d\-\(\) ]{10,}$/'],
        'captcha' => ['required','captcha'],
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors'=>$validator->errors()], 200));
    }
}