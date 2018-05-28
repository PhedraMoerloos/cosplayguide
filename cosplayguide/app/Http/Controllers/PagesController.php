<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function __construct()
    {

        $this->middleware('auth', ['only' => ['grime', 'lenzen', 'pruiken', 'armor', 'voorwerpen', 'stoffen']]);

    }




    public function home()
    {
      return view('staticpages.index');
    }




    public function about()
    {
      return view('staticpages.about');
    }




    public function tips()
    {
      return view('staticpages.tips');
    }


        public function worbla()
        {
          return view('staticpages.tips.worbla');
        }


        public function beginnertips()
        {
          return view('staticpages.tips.beginnertips');
        }


        public function cosplayplanner()
        {
          return view('staticpages.tips.cosplayplanner');
        }




    public function contact()
    {
      return view('staticpages.contact');
    }





    /* COSPLAY ONDERDELEN */

    public function grime()
    {
      return view('staticpages.onderdelen.grime');
    }


    public function lenzen()
    {
      return view('staticpages.onderdelen.lenzen');
    }



    public function pruiken()
    {
      return view('staticpages.onderdelen.pruiken');
    }



    public function armor()
    {
      return view('staticpages.onderdelen.armor');
    }



    public function voorwerpen()
    {
      return view('staticpages.onderdelen.voorwerpen');
    }



    public function stoffen()
    {
      return view('staticpages.onderdelen.stoffen');
    }


}
