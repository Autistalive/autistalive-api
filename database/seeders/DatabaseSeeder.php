<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\UserStatus;
use App\Enums\UserSupportLevel;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        /*
            Test User Seeder.
        */
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => Hash::make('password'),
            'status' => UserStatus::ACTIVE,
            'support_level' => UserSupportLevel::HIGH,
            'report_photo' => 'https://kernel.org/theme/images/logos/tux.png', //placeholder
            'face_photo' => 'https://kernel.org/theme/images/logos/tux.png', //placeholder
        ]);

        /*
            Test Admin Seeder.
        */
        Admin::factory()->create([
            'name' => 'Test Admin',
            'email' => 'test@test.com',
            'password' => Hash::make('password'),
        ]);
    }
}
