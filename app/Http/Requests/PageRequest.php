<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class PageRequest extends FormRequest
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
        'title' => ['required','min:2','max:255','string'],
        'content' => ['required','min:2','max:65000'],
        'published' => ['required','boolean'],
        'parent_id' => ['nullable','numeric'],
        'is_second_menu'=>['required','boolean'],
        'is_menu'=>['required','boolean'],
        'secondSort'=>['nullable','boolean'],
        'sort_order'=>['nullable'],
        'url'=>['unique:pages','required'],
        'seo_title' => ['required','max:255'],
        'seo_name' => ['nullable','max:255'],
        'description' => ['nullable','max:255'],
        'keywords'=> ['nullable','max:255'],
        'og_title'=> ['nullable','max:255'],
        'og_description'=> ['nullable','max:255'],
        ];
    }
}