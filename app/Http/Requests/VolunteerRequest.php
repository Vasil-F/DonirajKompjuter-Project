<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'city' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'position' => 'required',
            'details' => 'required',
            'file' => 'nullable|mimes:txt,pdf,doc'
        ];
    }
}
