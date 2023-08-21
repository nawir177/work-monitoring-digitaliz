<?php

namespace App\Http\Livewire;

use App\Models\Folder;
use Livewire\Component;

class ShowFolder extends Component
{
    public $category_id=1;
    public $folder_name;
    public $folder_id = 1;

    public function render()
    {

        return view('livewire.show-folder', [
            'data' => Folder::where('category_id', $this->category_id)->get()
        ]);
    }

    public function rename(Int $id)
    {

        $folder = Folder::find($id)->name;
        if ($folder) {
            $this->folder_name = $folder;
            $this->folder_id = $id;
        } else {
            return back();
        }
    }
}
