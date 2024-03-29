<?php

namespace App\Http\Requests\Ship;

use Illuminate\Foundation\Http\FormRequest;

class AddNewRequest extends FormRequest
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
            'name' => 'required|string',
            // 'country' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'weight' => 'required|numeric',
            // 'type' => 'required|in:1,2', 
            'category' => 'required|in:1,2', 
            // 'status' => 'required|in:Completed,Ongoing,Pending',
        ];
    }
}
