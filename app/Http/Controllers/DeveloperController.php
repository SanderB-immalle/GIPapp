<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Developer;
class DeveloperController extends Controller
{
    public function register()
    {


        $post = new Developer;

        $post->name = request('name');
        $post->company_name = request('company_name');
        $post->email = request('email');
        $post->password = request('password');

        $post->save();

        return redirect('/');
    }
}
