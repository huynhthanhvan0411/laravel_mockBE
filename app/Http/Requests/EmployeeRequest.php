<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'code_employee' => 'string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
            'role_id' => 'integer',
            'division_id' => 'integer',
            'position_id' => 'integer',
            'birthday' => 'date',
            'gender' => 'integer',
            'avatar' => 'string|max:255',
            'phone' => 'numeric|min:8|max:10',
            'address' => 'string|max:255',
            'password' => 'required|string|min:8|max:255',
        ];
    }
}
