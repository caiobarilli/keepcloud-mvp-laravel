<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Member;

class Members extends Component
{
    public $members;

    public $name = '';
    public $email = '';

    #[Layout('layouts.app')]
    public function render()
    {
        $this->members = Member::all();
        return view('members.show');
    }

    public function save()
    {
        Member::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        return redirect()->to('/dashboard/members')
            ->with('status', 'Novo registro salvo!');
    }

    public function destroy($id)
    {
        Member::find($id)->delete();
    }
}
