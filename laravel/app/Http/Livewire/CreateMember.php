<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Member;

class CreateMember extends Component
{
    public $name = '';
    public $email = '';

    #[Layout('layouts.app')]
    public function render()
    {
        return view('members.create');
    }

    public function save()
    {
        Member::create(
            $this->only(['name', 'email'])
        );

        return $this->redirect('/dashboard/members')
            ->with('status', 'Post successfully created.');
    }
}
