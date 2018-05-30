<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests;
use Image;

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



    public function update(Requests\UpdateUserRequest $request)
    {

        $user = \Auth::user();

        $user->description = $request->get('description');



        if($request->hasFile('profile_picture_url')){

            $profile_image = $request->file('profile_picture_url');

            //database:
            // allemaal een andere naam, cosplay foto's vinden door cosplay_id, thumbnail naam wordt opgeslagen in cosplay zelf
            $filename = $profile_image->hashName();
            $user->profile_picture_url =  'profiel' . $filename;

            //thumbnail
            Image::make($profile_image)->resize(85, null, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(85, 85)->save( storage_path('app/public/images/' . 'profiel' . $filename ) );


        };

        $user->save();

        return redirect('/profiel');



    }

}
