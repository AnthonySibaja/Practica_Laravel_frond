<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    // protected $tabla = 'post';
    // protected $primaryKey = 'post_id';
   // protected $dates =['deleted_at'];

    //use SoftDeletes;

    public $directory = "/images/";

    protected $table = 'post';
    protected $fillable =[
        'user_id',
        'titulo',
        'body',
        'path'
    ];


    public function user(){
        return $this->belongsTo('App\Models\User');
       
    }

    public function photos(){
        return $this->morphMany('App\Models\Photo','imageable');
    }

    public function tags(){
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
    public static function scopeLatest($query){
        return $query->orderBy('id','asc')->get();
    }
    public function getPathAttribute($value) {
        return $this->directory . $value;
    }
    
}
