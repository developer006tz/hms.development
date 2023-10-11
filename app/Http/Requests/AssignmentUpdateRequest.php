<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignmentUpdateRequest extends FormRequest
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
            'asset_id' => ['required', 'exists:assets,id'],
            'staff_id' => ['required', 'exists:staffs,id'],
            'assignment_date' => ['required', 'date'],
            'assignment_return_date' => ['nullable', 'date'],
            'assignment_condition' => ['nullable', 'in:good,demaged'],
            'assignment_usage_history' => ['nullable', 'max:255', 'string'],
            'assignment_description' => ['nullable', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ];
    }
}
