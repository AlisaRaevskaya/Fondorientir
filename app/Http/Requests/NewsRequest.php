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
        return false;
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
        'body' => ['required','string','min:8','max:500'],
        'intro' => ['string','max:255'],
        'dateline' => ['required'],
        'image' => ['required','image|mimes:jpeg,png,jpg,gif,svg','max:2048'],
        ];
    }
}
