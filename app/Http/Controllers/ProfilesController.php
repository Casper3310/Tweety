<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweety' => $user->tweets()->withLikes()->latest()->paginate(5)
        ]);
    }

    public function edit(User $user)
    {

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        //dd(request('avatar'));
        $attributes = request()->validate([
            'user_name' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['file'],
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:4', 'max:8', 'confirmed']
        ]);
        if (request('avatar')) {
            $path = asset('storage/' . request('avatar')->store('avatars'));
            $attributes['avatar'] = $path;
            //dd($attributes);
        }
        if(request('password'))
        {
            $attributes['password'] = bcrypt(request('password'));
        }

        $user->update($attributes);
        return redirect($user->path());
    }
}
