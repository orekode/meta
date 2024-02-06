<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDonateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            "first_name"    => [''],
            "last_name"     => [''],
            "email"         => ['email'],
            "contact"       => ['numeric'],
            "programme"     => ['required', 'exists:group_cards,id'],
            "payment_type"  => ['required'],
            "amount"        => ['required', 'numeric'],
            "donation_type" => ['required'],
            "image"         => [''],
            "reference"     => ['required'],
        ];

        // return [];
    }
}
