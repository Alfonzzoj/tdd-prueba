<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $users;
    public $name;
    public $email;

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.users.index');
    }

    public function create()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function update($id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->resetInput();
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
    }

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
    }
}
