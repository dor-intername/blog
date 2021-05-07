<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Eloquent;
/**
 * @mixin Builder
 */
class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Post $post)
    {
        return view('posts.post.index',compact('post'));
    }

    public function show(Post $post,Category $category){

        $data =[
            'post' => $post,
            'categories' => $category->limit(6)->get(),
        ];

        return view('welcome',$data);
    }

    public function create()
    {
        return view('posts.post.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

         $request->request->add(['user_id'=> auth()->id()]);
//
        Post::create($request->all());


        return redirect(route('home'));
    }


    public function edit(Post $id)
    {
        $post = $id;

        return view('posts.post.edit',compact('post'));

    }

    public function update(Request $request,Post $post)
    {
       $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());

        return redirect('/post/'.$post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/')->with('success','Post is Deleted');
    }
}
