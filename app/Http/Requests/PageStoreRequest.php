<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class PageStoreRequest extends FormRequest
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
        'content' => ['required','max:65000'],
        'published' => ['required','boolean'],
        'parent_id' => ['nullable','numeric'],
        'is_second_menu'=>['required','boolean'],
        'is_menu'=>['required','boolean'],
        'second_sort_order'=>['nullable','numeric'],
        'sort_order'=>['nullable','numeric'],
        'url'=>['unique:pages','required','max:2048','regex:/^\\/[^@"[\.\?!><)(,:]?+[a-zA-Z0-9]*?\/*?[a-zA-Z0-9]*?$/'],
        'seo_title' => ['required','max:255'],
        'seo_name' => ['nullable','max:255'],
        'description' => ['nullable','max:255'],
        'keywords'=> ['nullable','max:255'],
        'og_title'=> ['nullable','max:255'],
        'og_description'=> ['nullable','max:255'],
        ];
}