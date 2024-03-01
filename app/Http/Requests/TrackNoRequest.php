<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrackNoRequest extends FormRequest
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
            'title_1' => 'required|string',
            'title_2' => 'required|string',
            'title_3' => 'required|string',
            'title_4' => 'required|string',
            'number_1' => 'required|string',
            'number_2' => 'required|string',
            'number_3' => 'required|string',
            'number_4' => 'required|string',
           
        ];
    }
}
