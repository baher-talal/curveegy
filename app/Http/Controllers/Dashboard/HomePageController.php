<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class HomePageController extends Controller
{
    public function headervideo()
    {
        return view('dashboard.homepage.headervideo');
    }

    public function headervideoStore(Request $request)
    {
        dd($request->all());
    }
    
    public function cards()
    {
        return view('dashboard.homepage.cards');
    }

    public function cardsStore(Request $request)
    {
        dd($request->all());
    }
}
