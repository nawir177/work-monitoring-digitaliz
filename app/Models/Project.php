<?php

namespace App\Models;

use App\Models\Task;
use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function team()
    {
        return $this->hasMany(Team::class);
    }

    public function task()
    {
        return $this->hasMany(Task::class);
    }
}
