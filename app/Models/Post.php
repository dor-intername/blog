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

    static function order($value,$direction = 'DESC'){
        return self::orderBy($value,$direction);
    }

}
