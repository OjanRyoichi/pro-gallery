<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $title = 'Home';
        return view('user.index', compact('title'));
    }
}
