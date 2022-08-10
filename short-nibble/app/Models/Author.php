<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Story;

class Author extends Model
{
    use HasFactory;

    public function showstories()
    {
       return $this->hasMany(Story::class); 
    }
}
