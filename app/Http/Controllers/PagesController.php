<?php

namespace App\Http\Controllers;

use App\Models\Advantages;
use App\Models\Apartment;
use App\Models\Attraction;
use App\Models\HeaderSlider;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home () {

        $apartments = Apartment::all();
        $headerSlides = HeaderSlider::all();
        $advantages = Advantages::all();
        $attractions = Attraction::all();

        // dd($attractions);


        return view('home.index',['apartments'=>$apartments, 'headerSlides'=>$headerSlides, 'advantages'=>$advantages, 'attractions'=>$attractions]);
    }
}
