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
        //$messages = ['name.required' => 'Name is required', 'email.required'=>'E-mail is required.'];
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required',
        ]);

        User::create([
            'name' => request('name'),
            'email' => request('email'),
        ]);

        return redirect('/tickets/create');
    }




}
