<?php

namespace Tests\Feature\Livewire;

use App\Models\User;
use App\Livewire\Members;
use App\Models\Member;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class MembersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_not_render_component_without_login()
    {
        $this->get(route('members'))
            ->assertRedirect(route('home'));
    }

    /** @test */
    public function it_render_component_with_login()
    {
        $this->actingAs($user = User::factory()->create());

        $response = $this->actingAs($user)->get('/dashboard/members');

        $response->assertStatus(200);
    }

}
