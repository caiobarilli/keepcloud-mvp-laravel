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

    /** @test */
    public function it_search_member()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $members = Member::factory()->count(5)->create();

        Livewire::test(Members::class)
            ->set('query', $members[0]->name)
            ->call('search')
            ->assertSee($members[0]->name)
            ->assertDontSee($members[1]->name);
    }

    /** @test */
    public function it_creates_member()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        Livewire::test(Members::class)
            ->set('name', 'John Doe')
            ->set('email', 'john@example.com')
            ->call('save');

        $this->assertDatabaseHas('members', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);
    }

    /** @test */
    public function it_updates_member()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $member = Member::factory()->create();

        Livewire::test(Members::class)
            ->set('selectedMember', $member)
            ->set('name', 'John Doe 13')
            ->set('email', 'doe13@email.com')
            ->call('update');

        $this->assertDatabaseHas('members', [
            'name' => 'John Doe 13',
            'email' => 'doe13@email.com',
        ]);
    }

    /** @test */
    public function it_deletes_member()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $member = Member::factory()->create();

        Livewire::test(Members::class)
            ->set('selectedMember', $member)
            ->call('destroy', $member->id);

        $this->assertDatabaseMissing('members', [
            'id' => $member->id,
        ]);
    }

}
