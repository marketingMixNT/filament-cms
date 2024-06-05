<?php

namespace App\Http\Controllers;

use App\Models\Advantages;
use App\Models\Apartment;
use App\Models\Attraction;
use App\Models\HeaderSlider;
use App\Models\Offer;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home () {

        $apartments = Apartment::all();
        $headerSlides = HeaderSlider::all();
        $advantages = Advantages::orderBy('sort')->get();
        $attractions = Attraction::all();
        $offers = Offer::orderBy('sort')->get();

        // dd($attractions);


        return view('home.index',['headerSlides'=>$headerSlides, 'advantages'=>$advantages, 'attractions'=>$attractions,'offers'=>$offers]);
    }
}
