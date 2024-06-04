<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\HeaderSlider;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home () {

        $apartments = Apartment::all();
        $headerSlides = HeaderSlider::all();

        // dd($headerSlides);


        return view('home.index',['apartments'=>$apartments, 'headerSlides'=>$headerSlides]);
    }
}
