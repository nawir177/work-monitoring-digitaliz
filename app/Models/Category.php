<?php

namespace App\Models;

use App\Models\Icon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable =['name','icon_id','slug','color'];

    public function icon(){
        return $this->belongsTo(Icon::class);
    }

    public function folder(){
        return $this->hasMany(Folder::class);
    }
}
