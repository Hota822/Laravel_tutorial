<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MicropostsRequest extends FormRequest
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
            'content' => ['required', 'max:140'],
            'picture' => ['nullable', 'image', 'max:5000'],
        ];
    }
}
