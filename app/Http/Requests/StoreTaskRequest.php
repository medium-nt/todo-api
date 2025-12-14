<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'nullable|in:new,in_progress,completed',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Поле title обязательно.',
            'title.string' => 'Поле title должно быть строкой.',
            'title.max' => 'Поле title не должно превышать 255 символов.',
            'description.string' => 'Поле description должно быть строкой.',
            'status.in' => 'Недопустимый статус! разрешено использовать только: new, in_progress и completed.',
        ];
    }
}
