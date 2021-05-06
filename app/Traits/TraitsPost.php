<?php

namespace App\Traits;


use App\Models\Comment;

trait TraitsPost{

    public function orderLimit($value,$direction = 'DESC',$limit=''){
        return $this->orderBy($value,$direction)->limit($limit);
    }

    public function topPosts (){
      return $this->orderLimit('views','DESC',3)->get();
    }

    public function latestPosts(){
      return $this->latest()->limit(8)->get();
    }

    public function likablePosts (){
       return $this->orderLimit('likes','DESC',6)->get();
    }


    public function comments() {
        return $this->belongsToMany(Comment::class, "comment_post");
    }


}


?>
