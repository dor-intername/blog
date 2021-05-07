<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

    }

    public function show(Category $category, Post $post)
    {


        return view('categories.show', compact('category', 'post'));
    }


    public function edit(Category $category)
    {


        return view('categories.edit', compact('category'));


    }

    public function update(Request $request, Category $category)
    {

        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,

        ]);

        $category->update($request->all());

        return redirect(route('category', [$category->id]));

    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/')->with('success','Category is Deleted');
    }


}
