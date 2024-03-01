<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'location' => 'required|string',
            'main_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email_address' => 'required|string',
            'contact_no' => 'required|string', 
            'about_us_text' => 'required|string', 
        ];
    }
}
