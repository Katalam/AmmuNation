<?php

namespace Tests\Feature;

use App\Models\InviteCode;
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

    public function test_delete_invite_code_without_authorisation()
    {
        $invite_code = InviteCode::factory()->create();
        $response = $this->call('DELETE', '/invite_code/' . $invite_code->id);
        $this->assertTrue(InviteCode::find($invite_code->id) != null);
        $response->assertStatus(302);
    }

    public function test_delete_invite_code_without_permission()
    {
        $user = User::factory()->create();
        $invite_code = InviteCode::factory()->create();
        $response = $this->actingAs($user)->call('DELETE', '/invite_code/' . $invite_code->id);
        $this->assertTrue(InviteCode::find($invite_code->id) != null);
        $response->assertStatus(403);
    }

    public function test_delete_invite_code_with_permission()
    {
        $user = User::factory()->create();
        $user->permissions = _CREATE_INVITE_CODE;
        $user->save();
        $invite_code = InviteCode::factory()->create();
        $this->actingAs($user)->call('DELETE', '/invite_code/' . $invite_code->id);
        $this->assertTrue(InviteCode::find($invite_code->id) == null);
    }
}
