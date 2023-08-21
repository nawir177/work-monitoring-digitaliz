<?php

namespace App\Http\Livewire;

use App\Models\ChatGroup;
use Illuminate\Http\Request;
use Livewire\Component;

class ShowChatGroup extends Component
{

    public $team_id;
    public $value;
    public function render()
    {
        return view('livewire.show-chat-group', [
            "message" => ChatGroup::where('team_id', $this->team_id)->with(['user', 'team'])->get(),
            'team_id' => $this->team_id
        ]);
    }

    public function create()
    {
        ChatGroup::create([
            'team_id' => $this->team_id,
            'value' => $this->value,
            'user_id' => auth()->user()->id
        ]);
        $this->value = null;
        return back();
    }
}
