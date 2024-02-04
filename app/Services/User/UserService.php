<?php

namespace App\Services\User;

use App\Enums\UserStatus;
use App\Models\Media;
use App\Models\User;
use App\Services\Upload\UploadService;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function create(array $data): User
    {
        $report_photo = Media::query()->create(
            attributes: (
            (new UploadService())
                ->create($data['report_photo'], 'reports')
            )->toArray()
        );

        $face_photo = Media::query()->create(
            attributes: (
            (new UploadService)
                ->create($data['face_photo'], 'reports')
            )->toArray()
        );

        $user = User::query()->create(
            attributes: [
                'name' => $data['name'],
                'email' => $data['email'],
                'cpf' => $data['cpf'],
                'support_level' => $data['support_level'],
                'status' => UserStatus::UNVERIFIED,
                'password' => Hash::make($data['password']),
                'report_photo' => $report_photo->path,
                'face_photo' => $face_photo->path,
            ]
        );

        // TODO: Send Email

        return $user;
    }
}
