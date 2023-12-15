<?php

namespace Tests\Feature\Livewire;

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

}
