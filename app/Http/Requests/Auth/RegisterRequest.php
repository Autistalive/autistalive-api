<?php

namespace App\Http\Requests\Auth;

use App\Enums\UserSupportLevel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class RegisterRequest extends FormRequest
{
    const MAX_UPLOAD_SIZE = 20 * 1024;

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'support_level' => ['required', Rule::enum(UserSupportLevel::class)],
            'report_photo' => [
                'required',
                File::types(['jpeg', 'png', 'jpg', 'svg'])
                    ->max(self::MAX_UPLOAD_SIZE),
            ],
            'face_photo' => [
                'required',
                File::types(['jpeg', 'png', 'jpg', 'svg'])
                    ->max(self::MAX_UPLOAD_SIZE),
            ],
        ];
    }
}
