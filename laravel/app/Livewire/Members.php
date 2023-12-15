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
    public $cep, $endereco;
    public $query = '';
    public $editMemberId;
    public $isEditModalOpen = false;
    public $isCreateModalOpen = false;

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

    public function getAddressByCep($cep)
    {
        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

        return $response->json();
    }

    public function create()
    {
        $this->resetFields();
        return view('members.create');
    }

    public function openEditModal($id)
    {
        $this->editMemberId = $id;
        $this->prepareEdit();
        $this->isEditModalOpen = true;
        $this->isCreateModalOpen = false;
    }

    public function closeEditModal()
    {
        $this->isEditModalOpen = false;
    }

    public function openCreateModal()
    {
        $this->resetFields();
        $this->isCreateModalOpen = true;
        $this->isEditModalOpen = false;
    }

    public function closeCreateModal()
    {
        $this->isCreateModalOpen = false;
    }

    private function prepareEdit()
    {
        $this->selectedMember = Member::find($this->editMemberId);
        $this->name = $this->selectedMember->name;
        $this->email = $this->selectedMember->email;
        $this->cep = $this->selectedMember->cep;
        $this->endereco = $this->selectedMember->endereco;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'cep' => 'nullable',
            'endereco' => 'nullable',
        ]);

        Member::create([
            'name' => $this->name,
            'email' => $this->email,
            'cep' => $this->cep,
            'endereco' => $this->endereco,
        ]);

        session()->flash('status', 'Novo registro salvo!');
        return redirect()->to('/dashboard/members');
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'cep' => 'nullable',
            'endereco' => 'nullable',
        ]);

        $this->selectedMember->update([
            'name' => $this->name,
            'email' => $this->email,
            'cep' => $this->cep,
            'endereco' => $this->endereco,
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
