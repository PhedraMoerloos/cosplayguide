<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Cosplay;
use \App\Cosplayphoto;

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


    public function store(Request $request)
    {
        //
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
        $cosplayphotos = Cosplayphoto::where('cosplay_id', $id)->get();
        return view('cosplays.cosplayProgress', compact('cosplay', 'cosplayphotos'));

     }



     public function change_status($id, $status)
     {

       $cosplay = Cosplay::findOrFail($id);
       $cosplay->update(['status'=> $status]);

       return redirect('profiel/cosplay-overzicht/' . $cosplay->id);


     }




     public function show($id)
     {

        $cosplay = Cosplay::findOrFail($id);
        $cosplayphotos = Cosplayphoto::where('cosplay_id', $id)->get();
        $cosplay_creator_id = $cosplay->user_id;
        $cosplay_creator = User::findOrFail($cosplay_creator_id);

        return view('cosplays.showCosplay', compact('cosplay', 'cosplay_creator', 'cosplayphotos'));

     }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
