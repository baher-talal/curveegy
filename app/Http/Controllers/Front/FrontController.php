<?php

namespace App\Http\Controllers\Front;

use App\Models\Card;
use App\Models\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller as Controller;

class FrontController extends Controller
{
    public function index()
    {
        $header_video = Homepage::where('key', 'header_video')->get()->last();
        $cards = Card::all();
        return view('front.home', compact('header_video', 'cards'));
    }

    public function landing(Request $request)
    {
        $card = Card::findOrFail($request->id);
        $card_imgs = json_decode($card->landing_imgs);
        return view('front.landing', compact('card_imgs'));
    }

    public function language(Request $request)
    {
        App::setLocale($request->lang);
        Session::put('language', $request->lang);
        return redirect()->back();
    }
}
