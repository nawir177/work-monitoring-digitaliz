<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class LatestProject extends Component
{
    use WithPagination;
    public $search;

    public function updatingSearch()
    {
        $this->resetPage('commentsPage');
    }
    public function render()
    {

        return view('livewire.latest-project', [
            'projects' => Project::where('name', 'like', '%' . $this->search . '%')->with('client')->latest()->paginate(5),
        ]);
    }
}
