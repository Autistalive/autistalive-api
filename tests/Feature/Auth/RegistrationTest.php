<?php

use Illuminate\Http\UploadedFile;
use App\Enums\UserSupportLevel;

test('new users can register', function () {
    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'cpf' => '597.234.350-98',
        'password_confirmation' => 'password',
        'support_level' => UserSupportLevel::HIGH->value,
        'report_photo' => UploadedFile::fake()->image('report.png', 600, 600),
        'face_photo' => UploadedFile::fake()->image('face.png', 600, 600),
    ]);

    $this->assertAuthenticated();
    $response->assertNoContent();
});

test('fail registration for invalid cpf', function () {
    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'cpf' => '123.456.789-10',
        'password_confirmation' => 'password',
        'support_level' => UserSupportLevel::HIGH->value,
        'report_photo' => UploadedFile::fake()->image('report.png', 600, 600),
        'face_photo' => UploadedFile::fake()->image('face.png', 600, 600),
    ]);

    $this->assertFalse(auth()->check());
    $response->assertBadRequest();
});
