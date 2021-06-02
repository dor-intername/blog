<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**

 * @mixin \Eloquent
 */
class Category extends Model
{



    use HasFactory;
protected $guarded =[];
protected $table = 'categories';


    public function posts(){

        return $this->belongsToMany(Post::class,'category_post');
    }

    public function photo(){
        return $this->morphToMany(Photo::class,'photoable','photoable');
    }
}
