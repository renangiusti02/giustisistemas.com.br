<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest {
    public function authorize(): bool {
        return true;
    }

    public function rules(): array {
        return [
            'search' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:45',
        ];
    }
}

