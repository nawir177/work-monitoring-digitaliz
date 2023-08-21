<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;
class ProjectTable extends Component
{
    use WithPagination;
    public $search;
    public function updatingSearch()
    {
        $this->resetPage('commentsPage');
    }

    public function render()
    {
        return view('livewire.project-table', [
            'projects' => Project::where('name', 'like', '%' . $this->search . '%')->with('client')->latest()->paginate(6),
        ]);
    }
}
