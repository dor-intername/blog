<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 *
 * @mixin \Eloquent
 */
class Post extends Model
{
    protected $guarded= [];

    use HasFactory;



    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->belongsToMany(Comment::class, "comment_post");
    }

    public function orderLimit($value,$direction = 'DESC',$limit=''){
        return self::orderBy($value,$direction)->limit($limit);
    }


    public function path($path=''){

        return redirect('/post/'.$path);
    }

}
