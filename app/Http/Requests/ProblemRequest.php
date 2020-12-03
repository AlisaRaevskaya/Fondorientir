<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class ProblemRequest extends FormRequest
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
        'name' => ['required','min:2','max:255','regex:/^[a-zA-Zа-яА-Я]+(?:[\-\s.]+[a-zA-Zа-яА-Я]+)*$/'],
        'message' => ['required','string','min:8','max:500'],
        'email' => ['required','min:2','max:255','email'],
        'phone' => ['required','min:11','max:25','regex:/^(?:\+|\d)[\d\-\(\) ]{9,}[0-9]$/'],]
    }
    protected function failedValidation(Validator $validator)
    {
    throw new HttpResponseException(response()->json(['errors'=>$validator->errors()], 200));
    }
}
