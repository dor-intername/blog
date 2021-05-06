<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Eloquent;
/**
 * @mixin Builder
 */
class PostController extends Controller
{

    public function index(Post $post)
    {
        return view('post.index',compact('post'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request,Post $post)
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

        return view('post.update',compact('post'));

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

        return redirect('/');
    }
}
