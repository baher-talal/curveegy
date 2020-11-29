<?php

namespace App\Http\Controllers\Front;

use App\Models\Card;
use App\Models\Homepage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class FrontController extends Controller
{
    public function index()
    {
        $header_video = Homepage::where('key', 'header_video')->first();
        $cards = Card::all();
        return view('front.home', compact('header_video', 'cards'));
    }

    public function landing()
    {
        return view('front.landing');
    }
}
