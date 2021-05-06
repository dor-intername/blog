<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitsPost;
/**
 *
 * @mixin \Eloquent
 */
class Post extends Model
{
    protected $guarded= [];

    use HasFactory,TraitsPost;



    public function user() {
        return $this->belongsTo(User::class);
    }




    public function path($path=''){

        return redirect('/post/'.$path);
    }

}
