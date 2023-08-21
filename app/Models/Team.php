<?php

namespace App\Models;

use App\Models\User;
use App\Models\Project;
use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function teamMember()
    {
        return $this->hasMany(TeamMember::class);
    }


}
