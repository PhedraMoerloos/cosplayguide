<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home()
    {
      return view('staticpages.index');
    }




    public function about()
    {
      $name = "Phedra";
      return view('staticpages.about', compact('name'));
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

}
