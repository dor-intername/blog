<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(User $user)
    {

        return view('profiles.show', compact('user'));

    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));


    }

    public function update(User $user)
    {
      $attribute =  \request()->validate([
            'name' => 'required|unique:categories,name,' . $user->id,

        ]);

        $user->update($attribute);

        return redirect(route('profile.show', [$user->id]));
        //        $attributes = \request()->validate([
//            'username' => ['string', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
//            'name' => ['string', 'max:255'],
//            'avatar' => ['file'],
//            'email' => ['string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
//            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed']
//        ]);
//        if (\request('avatar')) {
//
//            $attributes['avatar'] = \request('avatar')->store('avatars');
//        }
//        $user->update($attributes);
//        return redirect($user->path());
    }

    public function follow(User $user){
        auth()->user()->toggleFollow($user);

        return back();
    }

}
