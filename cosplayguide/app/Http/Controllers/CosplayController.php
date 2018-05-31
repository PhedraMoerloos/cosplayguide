<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Cosplay;
use \App\Cosplayphoto;
use \App\Http\Requests;
use Image;

class CosplayController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $user = \Auth::user();

        $user_id = $user->id;
        $cosplays = Cosplay::where('user_id', $user_id)->get();

        $total_number_of_cosplays = $cosplays->count();
        $number_of_completed_cosplays = $cosplays->where('status', 'completed')->count();
        $number_of_cosplays_in_progress = $total_number_of_cosplays - $number_of_completed_cosplays;


        if ( $number_of_completed_cosplays == 1 ) {

            $user->level = "Youngling";

        }

        else if ( $number_of_completed_cosplays > 1 && $number_of_completed_cosplays <= 3 ) {

            $user->level = "Padawan";

        }

        else if( $number_of_completed_cosplays > 3) {

            $user->level = "Master";

        }

        $user->save();


        return view('cosplays.index', compact('user', 'cosplays', 'number_of_completed_cosplays', 'number_of_cosplays_in_progress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cosplays.createCosplay');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Requests\CreateCosplayRequest $request)
    {

        $cosplay = new Cosplay;

        $user_id = \Auth::user()->id;
        $cosplay->user_id = $user_id;
        $cosplay->name = $request->get('name');
        $cosplay->name_serie = $request->get('name_serie');
        //tijdelijk, cosplay heeft cosplayphoto nodig en omgekeerd
        $cosplay->thumbnail_url = "/img/cosplayphotos/". $user_id ."/thumbnails/Yui.jpg";

        $cosplay->save();


        $cosplay_id = $cosplay->id;


        $cosplayphoto = new Cosplayphoto;


        $cosplayphoto->cosplay_id = $cosplay_id;




        if($request->hasFile('photo_url')){


          //php artisan storage:link eerst, om een symbolic link te hebben tussen storage/app/public/images en de public/storage/images
          $image = $request->file('photo_url');

          //database:
          // allemaal een andere naam, cosplay foto's vinden door cosplay_id, thumbnail naam wordt opgeslagen in cosplay zelf
          $filename = $image->hashName();
          $cosplayphoto->photo_url = $filename;
          $cosplay->thumbnail_url =  'thumbnail' . $filename;

          //resizen en opslaan
          //cosplayphoto
          Image::make($image)->resize(430, null, function ($constraint) {
              $constraint->aspectRatio();
          })->save( storage_path('app/public/images/' . $filename ) );

          //thumbnail
          Image::make($image)->resize(171, null, function ($constraint) {
              $constraint->aspectRatio();
          })->crop(171, 171)->save( storage_path('app/public/images/' . 'thumbnail' . $filename ) );


        };



        $cosplayphoto->save();
        $cosplay->save();

        return redirect('/profiel/cosplay-overzicht/' . $cosplay->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




     public function show_progress($id)
     {

        $cosplay = Cosplay::findOrFail($id);
        $cosplayphotos = Cosplayphoto::where('cosplay_id', $id)->where('is_shown', 1)->get();
        return view('cosplays.cosplayProgress', compact('cosplay', 'cosplayphotos'));

     }



     public function change_status($id, $status)
     {

       $cosplay = Cosplay::findOrFail($id);
       $cosplay->update(['status'=> $status]);

       //extra safety net
       if ($status == "completed") {

         return redirect('profiel/cosplay-info/' . $cosplay->id);

       }

       else {
         return redirect('profiel/cosplays/' . $cosplay->id);
       }



     }




     public function show($id)
     {

        $user_logged_in = \Auth::user();

        $cosplay = Cosplay::findOrFail($id);
        $cosplayphotos = Cosplayphoto::where('cosplay_id', $id)->where('is_shown', 1)->get();
        $cosplay_creator_id = $cosplay->user_id;
        $cosplay_creator = User::findOrFail($cosplay_creator_id);

        return view('cosplays.showCosplay', compact('cosplay', 'cosplay_creator', 'cosplayphotos', 'user_logged_in'));

     }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $cosplay = Cosplay::findOrFail($id);
      $cosplayphotos = Cosplayphoto::where('cosplay_id', $id)->where('is_shown', 1)->get();

      return view('cosplays.editCosplay', compact('cosplay', 'cosplayphotos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UpdateCosplayRequest $request, $id)
    {
        $cosplay = Cosplay::findOrFail($id);


        $cosplay->name = $request->get('name');
        $cosplay->name_serie  =  $request->get('name_serie');
        //$cosplay->thumbnail_url =  $request->('thumbnail_url');
        $cosplay->difficulty = $request->get('difficulty');
        $cosplay->independence_percentage = $request->get('independence_percentage');
        $cosplay->months_spent = $request->get('months_spent');
        $cosplay->euros_spent             = $request->get('euros_spent');
        $cosplay->project_description     = $request->get('project_description');
        $cosplay->published_at            = \Carbon\Carbon::now();


        //thumbnail
        if($request->hasFile('thumbnail_url')){


          //php artisan storage:link eerst, om een symbolic link te hebben tussen storage/app/public/images en de public/storage/images
          $image = $request->file('thumbnail_url');

          //database:
          // allemaal een andere naam, cosplay foto's vinden door cosplay_id, thumbnail naam wordt opgeslagen in cosplay zelf
          $filename = $image->hashName();
          $cosplay->thumbnail_url =  'thumbnail' . $filename;

          //resizen en opslaan
          //thumbnail
          Image::make($image)->resize(171, null, function ($constraint) {
              $constraint->aspectRatio();
          })->crop(171, 171)->save( storage_path('app/public/images/' . 'thumbnail' . $filename ) );


        };


        //toegevoegde cosplayphotos
        if($request->hasFile('photo_url')){

            foreach(($request->file('photo_url')) as $image){

              $cosplayphoto = new Cosplayphoto;
              $cosplayphoto->cosplay_id = $cosplay->id;


              //database:
              // allemaal een andere naam, cosplay foto's vinden door cosplay_id, thumbnail naam wordt opgeslagen in cosplay zelf
              $filename = $image->hashName();
              $cosplayphoto->photo_url = $filename;

              //resizen en opslaan
              Image::make($image)->resize(430, null, function ($constraint) {
                  $constraint->aspectRatio();
              })->save( storage_path('app/public/images/' . $filename ) );

              $cosplayphoto->save();

            }
        };



        if ($cosplay->status != "completed") {

          $cosplay->status                = 'completed';

        }


        $cosplay->save();


        return redirect('profiel/cosplays/' . $cosplay->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        /*$cosplay = Cosplay::findOrFail($id);
        $cosplay->is_shown = false;

        $cosplay->save();

        return redirect('/profiel');*/

    }
}
