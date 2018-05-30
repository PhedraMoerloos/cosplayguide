<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cosplayphoto;

class CosplayphotoController extends Controller
{

    public function delete($id)
    {

        $cosplayphoto = Cosplayphoto::findOrFail($id);
        $cosplayphoto->is_shown = false;

        $cosplayphoto->save();

        return redirect('/profiel/cosplay-overzicht/'. $cosplayphoto->cosplay_id);

    }


}
