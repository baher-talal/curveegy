<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Card;
use App\Models\Homepage;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller as Controller;

class HomePageController extends Controller
{
    public function headervideo()
    {
        $header_video = Homepage::where('key', 'header_video')->first();
        return view('dashboard.homepage.headervideo', compact('header_video'));
    }

    public function headervideoStore(Request $request)
    {
        $Homepage['key'] = 'header_video';
        $Homepage['value'] = Storage::disk('uploads')->put('header_video', $request->headervideoinput);
        $CreateHomepage = Homepage::create($Homepage);
        return redirect()->back()->with('success', 'Saved!');
    }
    
    public function cards()
    {
        return view('dashboard.homepage.cards');
    }

    public function cardsStore(Request $request)
    {
        $card = $request->all();
        $card['image'] = Storage::disk('uploads')->put("card", $request->image);
        $CreateCard = Card::create($card);
        return redirect()->back()->with('success', 'Saved!');
    }

    public function newsletterStore(Request $request)
    {
        $CreateCard = Newsletter::create($request->all());
        return redirect()->back()->with('success', 'Saved!');
    }
}
