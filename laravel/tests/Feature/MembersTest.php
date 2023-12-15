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

        // Crie alguns membros para testar a pesquisa
        $members = Member::factory()->count(5)->create();

        Livewire::test(Members::class)
            ->set('query', $members[0]->name) // Configurar a consulta com base no primeiro membro criado
            ->call('search')
            ->assertSee($members[0]->name) // Garantir que o nome do primeiro membro seja exibido após a pesquisa
            ->assertDontSee($members[1]->name); // Garantir que o nome do segundo membro não seja exibido

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

}
