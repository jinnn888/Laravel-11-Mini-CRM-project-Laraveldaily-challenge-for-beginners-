<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255', 
            'description' => 'required|string',
            'user_id' => [
                'required',
                'exists:users,id', 
                'string'
            ],
            'client_id' => [
                'required',
                'exists:clients,id',
                'string'
            ],
            'project_id' => [
                'required',
                'exists:projects,id',
                'integer'
            ],
            'deadline_at' => 'required|date|after_or_equal:today', 
            'status' => [
                'required',
                Rule::in(['open', 'in-progress', 'pending', 'waiting-client', 'blocked', 'closed']), 
            ],
        ];
    }
}
