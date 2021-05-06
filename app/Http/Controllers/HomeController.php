<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Post $post)
    {

        $data =[

            'topPosts' => $post->orderLimit('views','DESC',3)->get(),
            'categories' => Category::limit(6)->get(),
            'latestPosts' => $post->latest()->limit(8)->get(),
            'likablePosts' => $post->orderLimit('likes','DESC',6)->get(),
        ];

        return view('welcome',$data);
    }
}
