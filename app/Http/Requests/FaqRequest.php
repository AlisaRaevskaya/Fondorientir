<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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
        'title' => [ 'required','string','min:8','max:250'],
        'body' => [ 'required','string','min:8','max:25000'],
        'intro' => ['string','max:250','nullable'],
        'date_published'=>['required','date'],
        ];
    }
}