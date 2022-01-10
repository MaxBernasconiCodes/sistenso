<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {

        $data = ['1',2,3];
        $segunda = 'asd';
        return view('landing', compact(['data','segunda']));
    }
}
