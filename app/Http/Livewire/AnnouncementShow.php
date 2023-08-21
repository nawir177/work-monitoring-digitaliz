<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use App\Models\AnnouncementComment;
use App\View\Components\annountcement;
use Illuminate\Http\Request;

class AnnouncementShow extends Component
{

    public $post_id;
    public $value;
    public $user_id;
    public function render()
    {
        return view('livewire.announcement-show', [
            "announcement" => Announcement::latest()->with(['user', 'announcementComment'])->get()
        ]);
    }

    public function createComment($id)
    {
        AnnouncementComment::create([
            "announcement_id" => $id,
            "user_id" => Auth()->user()->id,
            "value" => $this->value
        ]);

        $this->value="";

        return back();
    }
}
