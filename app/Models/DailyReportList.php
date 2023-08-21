<?php

namespace App\Models;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DailyReportList extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function dailyReport(){
        return $this->belongsTo(dailyReport::class);
    
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
