<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'planet_id' => 'required|exists:planet,id',
            'power_id' => 'required|exists:power,id',
            'age' => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'planet_id.required' => 'The planet_id field is required.',
            'planet_id.exists' => 'The selected planet_id is invalid.',
            'power_id.required' => 'The power_id field is required.',
            'power_id.exists' => 'The selected power_id is invalid.',
            'age.required' => 'The age field is required.',
            'age.integer' => 'The age must be an integer.',
            'age.min' => 'The age must be at least 0.',
        ];
    }
}
