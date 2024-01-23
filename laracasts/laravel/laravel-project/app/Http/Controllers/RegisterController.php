<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        request()->validate(
            [
                'name' => 'required',
                'username' => 'required',
                'email' => 'requeired',
                'password' => 'requeired'
            ]
        );
    }
}
