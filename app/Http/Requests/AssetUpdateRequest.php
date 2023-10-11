<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssetUpdateRequest extends FormRequest
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
            'asset_no' => ['required', 'max:255', 'string'],
            'asset_name' => ['required', 'max:255', 'string'],
            'asset_purchase_date' => ['required', 'date'],
            'asset_purchase_cost' => ['nullable', 'numeric'],
            'asset_current_value' => ['nullable', 'numeric'],
            'asset_manufacture' => ['nullable', 'max:255', 'string'],
            'asset_startdate_warant' => ['required', 'date'],
            'asset_enddate_warant' => ['required', 'date'],
            'asset_description' => ['nullable', 'max:255', 'string'],
            'asset_type_id' => ['required', 'exists:asset_types,id'],
            'asset_category_id' => ['required', 'exists:asset_categories,id'],
            'asset_status' => ['required', 'in:in use,maintanance,retired'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ];
    }
}
