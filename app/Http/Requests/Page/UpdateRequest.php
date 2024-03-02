<?php

namespace App\Http\Requests\Page;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(Request $r)
    {
        $id=encryptor('decrypt',$r->uptoken);
        return [
            'title'=>'required|unique:pages,page_title,'.$id,
        ];
    }

    public function messages(){
        return [
            'required' => "The :attribute field is required",
            'unique' => "The :attribute is already used. Please try another",
        ];
    }
}
