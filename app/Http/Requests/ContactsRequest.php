<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
        // 'lastName' => ['required','string','max:255'],
        // 'firstName' => ['string','max:255'],
        // 'fatherName' => ['nullable','regex:/[a-zA-Zа-яА-Я]{2,25}$/'],
        // 'message' => [ 'required','string','min:8','max:2500'],
        // 'email' => ['min:2','max:255','email','nullable'],
        // 'phone' => ['required','min:11','max:25','regex:/^(?:\+|\d){1}[\d\-\(\) ]{10,}$/'],
        // 'fb_link' => ['required','accepted'],
        // 'job' => [ 'min:5','max:255','nullable'],

        ];
    }
}