<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Employe;
use Livewire\Component;
use Livewire\WithPagination;
class PresenceTable extends Component
{
    use WithPagination;
    public $search;
    public function updatingSearch()
    {
        $this->resetPage('commentsPage');
    }

    public function render()
    {
        return view('livewire.presence-table',[
            'employes'=> Employe::where('verified', true)->where('name', 'like', '%' . $this->search . '%')->latest()->with('user')->get(),
        ]);
    }
}
