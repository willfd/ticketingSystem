<?php

namespace App\Http\Requests\TicketRequest;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class PatchRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'assignee_id' => 'nullable|integer|exists:users,id',
            'status' => 'nullable|string|in:new, processing, pending, awaiting, resolved, expired'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        // Create a custom response for validation failures
        $response = response()->json(
            [
                '@type' => 'Error',
                'code' => 400,
                'reason' => 'Bad Request',
                'message' => $validator->errors(),
            ],
            400
        );
        throw new ValidationException($validator, $response);
    }
}
