<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $trains = Train::all();
        //$trains = Train::where('orario_di_partenza', '>=', today())->get(); resta un solo treno
        return view('welcome', compact('trains'));
    }
}
