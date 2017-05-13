<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
       public function register()
    {


        $post = new Player;

        $post->name = request('name');
        $post->email = request('email');
        $post->password = request('password');

        $post->save();

        return redirect('/');

    }
}
