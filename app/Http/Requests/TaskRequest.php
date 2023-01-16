<?php

namespace App\Http\Requests;

use App\Enums\Priorities;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'priority' => new Enum(Priorities::class),
            'project_id' => ['required', 'integer', 'exists:projects,id'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'name' => __('task name'),
            'priority' => __('priority'),
            'project_id' => __('project'),
        ];
    }
}
