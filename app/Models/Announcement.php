<?php

namespace App\Models;

use App\Models\User;
use PhpParser\Node\Expr\FuncCall;
use Spatie\MediaLibrary\HasMedia;
use App\Models\AnnouncementComment;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    protected $guarded =['id'];

    public function user(){
        return $this->belongsTo(User::class);
    
    }

    public function announcementComment(){
        return $this->hasMany(AnnouncementComment::class);
    }
}

