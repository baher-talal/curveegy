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
            $landing_imgs = [];
            $newCard = $request->all();
            if($request->image){
                $newCard['image'] = Storage::disk('uploads')->put("card", $request->image);
            }
            if($request->landing_imgs){
                foreach($newCard['landing_imgs'] as $img){
                  $img = Storage::disk('uploads')->put("landing_images", $img);
                  array_push($landing_imgs, $img);
                }
                $newCard['landing_imgs'] = json_encode($landing_imgs);
            }
            $card->update($newCard);
        }else{
            $card = $request->all();
            $landing_imgs = [];
            $card['image'] = Storage::disk('uploads')->put("card", $request->image);
            foreach($card['landing_imgs'] as $img){
                $img = Storage::disk('uploads')->put("landing_images", $img);
                array_push($landing_imgs, $img);
            }
            $card['landing_imgs'] = json_encode($landing_imgs);
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

    public function footer()
    {
        $address = optional(Homepage::where('key', 'address')->get()->last())->value;
        $phone = optional(Homepage::where('key', 'phone')->get()->last())->value;
        $mail = optional(Homepage::where('key', 'mail')->get()->last())->value;
        $website = optional(Homepage::where('key', 'website')->get()->last())->value;
        return view('dashboard.homepage.footer', compact('address', 'phone', 'mail', 'website'));
    }

    public function footerStore(Request $request)
    {
        if($request->address){
            $address = Homepage::where('key', 'address')->updateOrCreate(['key' => "address" ,'value' => $request->address]);
        }
        if($request->phone){
            $phone = Homepage::where('key', 'phone')->updateOrCreate(['key' => "phone" ,'value' => $request->phone]);
        }
        if($request->mail){
            $mail = Homepage::where('key', 'mail')->updateOrCreate(['key' => "mail" ,'value' => $request->mail]);
        }
        if($request->website){
            $website = Homepage::where('key', 'website')->updateOrCreate(['key' => "website" ,'value' => $request->website]);
        }
        return redirect()->back()->with('success', 'Saved!');
    }
}
