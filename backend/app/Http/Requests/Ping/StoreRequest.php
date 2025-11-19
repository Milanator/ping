<?php

namespace App\Http\Requests\Ping;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'uuid' => ['required', 'string'],
            'battery_percent' => ['required', 'integer', 'between:0,100']
        ];
    }

    public function messages(): array
    {
        return [
            'uuid.required' => __('ping.uuid_required'),
            'uuid.uuid' => __('ping.uuid_invalid'),
            'battery_percent.required' => __('ping.battery_required'),
            'battery_percent.integer' => __('ping.battery_integer'),
            'battery_percent.min' => __('ping.battery_min'),
            'battery_percent.max' => __('ping.battery_max'),
        ];
    }
}
