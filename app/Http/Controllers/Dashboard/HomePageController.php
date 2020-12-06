<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Card;
use App\Models\Homepage;
use App\Mail\LandingMail;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller as Controller;

class HomePageController extends Controller
{
    public function headervideo()
    {
        $header_video = Homepage::where('key', 'header_video')->get()->last();
        return view('dashboard.homepage.headervideo', compact('header_video'));
    }

    public function headervideoStore(Request $request)
    {
        $Homepage['key'] = 'header_video';
        $Homepage['value'] = Storage::disk('uploads')->put('header_video', $request->headervideoinput);
        $CreateHomepage = Homepage::where('key', 'header_video')->delete();
        
        $CreateHomepage = Homepage::create($Homepage);
        return redirect()->back()->with('success', 'Saved!');
    }
    
    public function cards()
    {
        $cards = Card::all();
        return view('dashboard.homepage.cards', compact('cards'));
    }

    public function cardsStore(Request $request)
    {
        if($request->id){
            $card = Card::findOrFail($request->id);
            $newCard = $request->all();
            if($request->image){
                $newCard['image'] = Storage::disk('uploads')->put("card", $request->image);
            }
            $card->update($newCard);
        }else{
            $card = $request->all();
            $card['image'] = Storage::disk('uploads')->put("card", $request->image);
            $CreateCard = Card::create($card);
        }
        return redirect()->back()->with('success', 'Saved!');
    }

    public function cardsEdit(Request $request)
    {
        $card = Card::find($request->id);
        return $card;
    }

    public function cardsDelete(Request $request)
    {
        $card = Card::find($request->id)->delete();
        return $card;
    }

    public function newsletterStore(Request $request)
    {
        $CreateCard = Newsletter::create($request->all());
        return redirect()->back()->with('success', 'Saved!');
    }

    public function landing(Request $request)
    {
        $details = $request->all();
        \Mail::to('yousef.uwk@gmail.com')->send(new \App\Mail\LandingMail($details));
        return redirect()->back()->with('success', 'Email Sent!');
    }
}
