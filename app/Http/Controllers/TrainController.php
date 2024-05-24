<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TrainController extends Controller
{
    //
    public function index()
    {

        $now = Carbon::now();
        $trains = Train::all()->where('data', '>', $now);


        return view('home', compact('trains'));
    }
}
