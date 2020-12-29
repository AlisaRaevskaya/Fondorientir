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
        'title' => ['required','min:2','max:255'],
        'body' => ['required','string','min:8','max:65000'],
        'intro' => ['max:255'],
        'date_published' => ['required','date'],
        'image' => ['required'],
        ];
    }
}
