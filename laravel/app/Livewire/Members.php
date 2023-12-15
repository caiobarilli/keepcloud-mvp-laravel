<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Member;

class Members extends Component
{
    use WithPagination;

    public $selectedMember;
    public $name, $email;
    public $query = '';
    public $editMemberId;
    public $isEditModalOpen = false;

    #[Layout('layouts.app')]
    public function render()
    {
        return view('members.show', [
            'members' => Member::where('name', 'like', '%' . $this->query . '%')
                ->orWhere('email', 'like', '%' . $this->query . '%')
                ->paginate(10),
        ]);
    }

    public function search()
    {
        $this->resetPage();
    }

    public function create()
    {
        $this->resetFields();
        return view('members.create');
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

    public function edit()
    {

        $this->selectedMember = Member::find($this->editMemberId);

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
