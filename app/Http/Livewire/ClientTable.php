<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class ClientTable extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage('commentsPage');
    }

   
    public function render()
    {
  
        return view('livewire.client-table', [
            'clients' => Client::where('name', 'like', '%' . $this->search . '%')->latest()->paginate(6),
        ]);
    }
}
