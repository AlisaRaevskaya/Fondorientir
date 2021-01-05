<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
        'title' => ['required','min:2','max:2500'],
        'body' => ['required','string','max:65000'],
        'intro' => ['max:2550'],
        'date_published' => ['required','date'],
        'image' => ['image','mimes:jpeg,png,jpg,gif,svg|max:2048'],
        ];
    }
}