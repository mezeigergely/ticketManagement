<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required',
        ]);


        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect("/tickets/create/{$user->id}");
    }




}
