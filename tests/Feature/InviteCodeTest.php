<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InviteCodetest extends TestCase
{
    use RefreshDatabase;

    public function test_allowed_view_all_invite_codes()
    {
        $user = User::factory()->create();
        $user->permissions = _CREATE_INVITE_CODE;
        $user->save();
        $response = $this->actingAs($user)->get('/invite_code');

        $response->assertStatus(200);
    }

    public function test_not_allowed_view_all_invite_codes()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/invite_code');

        $response->assertStatus(403);
    }
}
