<?php

namespace App\Http\Livewire;

use App\Models\Link;
use Livewire\Component;

class LinkTable extends Component
{
    public $folder_id;
    public $name_link;
    public $value;
    public $description;
    public $link_id=1;

    public function render()
    {
        return view('livewire.link-table', [
            "links" => Link::where('folder_id', $this->folder_id)->get()
        ]);
    }

    public function edit($id)
    {
        $link = Link::find($id);

        if ($link) {
            $this->name_link = $link->name;
            $this->value = $link->value;
            $this->description = $link->description;
            $this->link_id = $link->id;
        }else{
            return back();
        }
    }
}
