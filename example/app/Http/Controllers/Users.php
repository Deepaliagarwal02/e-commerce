<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function Users()
    {
        return view('userlist');
    }
}
