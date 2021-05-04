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

    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request,User $user)
    {
     $post = $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        $user->posts($post);
        }

    public function edit()
    {

    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
