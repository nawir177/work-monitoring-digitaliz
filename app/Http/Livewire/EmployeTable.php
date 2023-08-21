<?php

namespace App\Http\Livewire;

use App\Models\Employe;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeTable extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage('commentsPage');
    }

    public function render()
    {
    
        return view('livewire.employe-table',[
            "employees"=>Employe::where('verified',true)->where('name', 'like', '%' . $this->search . '%')->latest()->with('user')->paginate(6),
        ]
        );
    }
}
