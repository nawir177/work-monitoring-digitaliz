<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;
use Livewire\WithPagination;

class AnnouncementTable extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage('commentsPage');
    }

    public function render()
    {

        return view(
            'livewire.announcement-table',
            [
                "announcements" => Announcement::where('title', 'like', '%' . $this->search . '%')->latest()->paginate(6),
            ]
        );
    }
}
