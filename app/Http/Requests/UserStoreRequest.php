<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'user_type' => [
                'required',
                'in:patient,doctor,nurse,receptionist,cashier,radiologist,accountant,pharmacist,',
            ],
            'table_name' => [
                'required',
                'unique:users,table_name',
                'max:255',
                'string',
            ],
            'password' => ['required'],
            'roles' => 'array',
        ];
    }
}
