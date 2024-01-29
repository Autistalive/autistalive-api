<?php

use App\Models\Admin;
use App\Models\User;
use App\Providers\RouteServiceProvider;

test('admins can authenticate using the login screen', function () {
    $admin = Admin::factory()->create();

    $response = $this->post('/admin/login', [
        'email' => $admin->email,
        'password' => 'password',
    ]);

    $this->assertAuthenticatedAs($admin, guard: 'admin');
    $response->assertNoContent();
});

test('admins can not authenticate with invalid password', function () {
    $user = Admin::factory()->create();

    $this->post('/admin/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $this->assertGuest(guard: 'admin');
});

test('normal users cannot access admin routes', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user, guard: 'web')->post('/admin/logout');

    //For now we are getting redirected to home if we try to access protected routes without autorization.
    $response->assertStatus(302);

    //TODO: This should've been /admin/login for now, but since we are using the same middleware for both admin and user, we are getting redirected to /login.
    $response->assertRedirect("/login");
});

test('admins can logout', function () {
    $admins = Admin::factory()->create();

    $response = $this->actingAs($admins, guard: 'admin')->post('/admin/logout');

    $this->assertGuest();
    $response->assertNoContent();
});
