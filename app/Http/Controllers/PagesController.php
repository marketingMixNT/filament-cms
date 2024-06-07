<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Offer;
use App\Models\Apartment;
use App\Models\Advantages;
use App\Models\Attraction;
use App\Models\HeaderSlider;
use Firefly\FilamentBlog\Blog;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home () {

        $apartments = Apartment::all();
        $headerSlides = HeaderSlider::orderBy('sort')->get();
        $advantages = Advantages::orderBy('sort')->get();
        $attractions = Attraction::all();
        $offers = Offer::orderBy('sort')->get();

        // dd($headerSlides);


        return view('home.index',['headerSlides'=>$headerSlides, 'advantages'=>$advantages, 'attractions'=>$attractions,'offers'=>$offers]);
    }

    // public function newses () {
    //     $newses = Blog::all();

    //     // dd($newses);

    //     return view('newses.index',['newses' => $newses]);
    // }
}
