<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    public function post(){
        return $this->morphedByMany('App\Models\Post', 'taggable');

    }
    public function Videos(){
        return $this->morphToMany('App\Models\Video', 'taggable');
    }

}
