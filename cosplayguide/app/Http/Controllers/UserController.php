<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function edit()
    {

        $user = \Auth::user();
        return view('cosplays.profileEdit', compact('user'));

    }



    public function update(Request $request, $id)
    {
        //
    }

}
