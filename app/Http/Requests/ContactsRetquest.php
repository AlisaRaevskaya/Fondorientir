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
            'name' => ['required','string','max:255'],
            'eng_name'=> ['string','max:255'],
            'inn' => ['string','max:255'],
            'index' => ['numeric','max:255'],
            'city' => ['string','max:255'],
            'street' => ['string','max:255'],
            'station' => ['string','max:255'],
            'bus' => ['string','max:255'],
            'routes' => ['string','max:255'],
            'metro'=> ['string','max:255'],
            'phone'=> ['string','max:255'],
            'email' => ['string','max:255'],
            'web' => ['required','string','max:255'],
            'hours' => ['string','max:255'],
            'logo' => ['required','string','max:255'],
            'phone2' => ['string','max:255'],
            'logo2' => ['required','string','max:255'],
            'fb_link' => ['string','max:255'],
            'vk_link' => ['string','max:255'],
            'inst_link' => ['string','max:255'],
            'phone_rus'=> ['string','max:255'],
        ];
    }
}