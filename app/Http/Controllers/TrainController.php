<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;


class TrainController extends Controller
{
    public function index() {
        $trains = Train::all();
        
        return view('home' ,compact('trains'));
    }


    public function partenze()
    {
        $trains = Train::where('departure_time', '>', '08:00')->get();


        return view('partenze', compact('trains'));
    }

}