<?php

namespace App\Support;

use Illuminate\Contracts\Validation\Validator;

trait FailedValidation
{
    protected function failedValidation(Validator $validator)
    {
        throw new \Illuminate\Validation\ValidationException(
            $validator,
            response()->json(
                $validator->errors(),
                422
            )
        );
    }
}