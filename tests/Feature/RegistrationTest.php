<?php

namespace Tests\Feature;

use App\Models\InviteCode;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register_with_invite_code()
    {
        $code = InviteCode::factory()->create();

        $response = $this->post('/register', [
            'username' => 'Test User',
            'invite_code' => $code->code,
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $code = InviteCode::find($code->id);
        $this->assertTrue($code->used_by != null);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_new_users_cannot_register_with_used_invite_code()
    {
        $code = InviteCode::factory()->create();
        $user = User::factory()->create();

        $code->used_by = $user->id;
        $code->save();

        $response = $this->post('/register', [
            'username' => 'Test User',
            'invite_code' => $code->code,
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);
        $response->assertSessionHasErrors();
    }

    public function test_new_users_cannot_register_without_invite_code()
    {
        $response = $this->post('/register', [
            'username' => 'Test User',
            'invite_code' => '',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertSessionHasErrors();
    }
}
