<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Member;

class Members extends Component
{
    public $members;
    public $selectedMember;
    public $name = '';
    public $email = '';
    public $isEditModalOpen = false;
    public $editMemberId;

    #[Layout('layouts.app')]
    public function render()
    {
        $this->members = Member::all();
        return view('members.show');
    }

    public function create()
    {
        $this->resetFields();
        return view('members.create');
    }

    public function edit($id)
    {
        $this->selectedMember = Member::find($id);
        $this->name = $this->selectedMember->name;
        $this->email = $this->selectedMember->email;

        return view('members.edit');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        Member::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash('status', 'Novo registro salvo!');
        return redirect()->to('/dashboard/members');
    }

    public function openEditModal($id)
    {
        $this->editMemberId = $id;
        $this->isEditModalOpen = true;
    }

    public function closeEditModal()
    {
        $this->reset(['editMemberId', 'isEditModalOpen']);
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $this->selectedMember->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash('status', 'Registro atualizado!');
        return redirect()->to('/dashboard/members');
    }

    public function destroy($id)
    {
        Member::find($id)->delete();
        session()->flash('status', 'Registro excluído!');
        return redirect()->to('/dashboard/members');
    }

    private function resetFields()
    {
        $this->name = '';
        $this->email = '';
    }
}
