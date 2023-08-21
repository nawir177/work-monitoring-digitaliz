<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Folder extends Model
{
    use HasFactory;

    protected $fillable=['name','category_id','slug'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
