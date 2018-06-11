<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cosplayphoto;
use App\Cosplay;
use \App\Http\Requests;
use Image;

class CosplayphotoController extends Controller
{

    public function delete($id)
    {

        $cosplayphoto = Cosplayphoto::findOrFail($id);
        $cosplayphoto->is_shown = false;

        $cosplayphoto->save();

        return back()->withInput();

    }



    public function store(Requests\CreateCosplayphotoRequest $request, $id)
    {

        $cosplay = Cosplay::findOrFail($id);


        if($request->hasFile('photo_url')){

            foreach(($request->file('photo_url')) as $image){

              $cosplayphoto = new Cosplayphoto;
              $cosplayphoto->cosplay_id = $cosplay->id;


              //database:
              // allemaal een andere naam, cosplay foto's vinden door cosplay_id, thumbnail naam wordt opgeslagen in cosplay zelf
              $filename = $image->hashName();
              $cosplayphoto->photo_url = $filename;

              //resizen en opslaan
              Image::make($image)->resize(700, null, function ($constraint) {
                  $constraint->aspectRatio();
              })->save( storage_path('app/public/images/' . $filename ) );

              $cosplayphoto->save();

            }



          }


      return back()->withInput();

    }


}
