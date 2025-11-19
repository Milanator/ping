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
            'uuid.required' => 'UUID zariadenia je povinné.',
            'uuid.uuid' => 'UUID musí byť v platnom formáte.',
            'battery_percent.required' => 'Hodnota batérie je povinná.',
            'battery_percent.integer' => 'Hodnota batérie musí byť celé číslo.',
            'battery_percent.min' => 'Hodnota batérie musí byť aspoň 1%.',
            'battery_percent.max' => 'Hodnota batérie nemôže byť vyššia ako 100%.',
        ];
    }
}
