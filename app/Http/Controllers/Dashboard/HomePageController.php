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
        if($request->address1){
            $address1 = Homepage::where('key', 'address1')->first();
            if($address1){
              $address1->value = $request->address1;
              $address1->toggle = (boolean)$request->address1toggle;
              $address1->save();
            }else{
              $address1 = new Homepage;
              $address1->key = 'address1';
              $address1->value = $request->address1;
              $address1->toggle = (boolean)$request->address1toggle;
              $address1->save();
            }
        }
        if($request->address2){
            $address2 = Homepage::where('key', 'address2')->first();
            if($address2){
              $address2->value = $request->address2;
              $address2->toggle = (boolean)$request->address2toggle;
              $address2->save();
            }else{
              $address2 = new Homepage;
              $address2->key = 'address2';
              $address2->value = $request->address2;
              $address2->toggle = (boolean)$request->address2toggle;
              $address2->save();
            }
        }
        if($request->phone1){
            $phone1 = Homepage::where('key', 'phone1')->first();
            if($phone1){
              $phone1->value = $request->phone1;
              $phone1->toggle = (boolean)$request->phone1toggle;
              $phone1->save();
            }else{
              $phone1 = new Homepage;
              $phone1->key = 'phone1';
              $phone1->value = $request->phone1;
              $phone1->toggle = (boolean)$request->phone1toggle;
              $phone1->save();
            }
        }
        if($request->phone2){
            $phone2 = Homepage::where('key', 'phone2')->first();
            if($phone2){
              $phone2->value = $request->phone2;
              $phone2->toggle = (boolean)$request->phone2toggle;
              $phone2->save();
            }else{
              $phone2 = new Homepage;
              $phone2->key = 'phone2';
              $phone2->value = $request->phone2;
              $phone2->toggle = (boolean)$request->phone2toggle;
              $phone2->save();
            }
        }
        if($request->mail){
            $mail = Homepage::where('key', 'mail')->first();
            if($mail){
              $mail->value = $request->mail;
              $mail->toggle = (boolean)$request->mailtoggle;
              $mail->save();
            }else{
              $mail = new Homepage;
              $mail->key = 'mail';
              $mail->value = $request->mail;
              $mail->toggle = (boolean)$request->mailtoggle;
              $mail->save();
            }
        }

        return redirect()->back()->with('success', 'Saved!');
    }


    public function socialMedia()
    {
      return view('dashboard.homepage.socialMedia');
    }

    public function postSocialMedia(Request $request)
    {
        if($request->facebook){
          $facebook = Homepage::where('key', 'facebook')->first();
          if($facebook){
            $facebook->value = $request->facebook;
            $facebook->toggle = (boolean)$request->facebooktoggle;
            $facebook->save();
          }else{
            $facebook = new Homepage;
            $facebook->key = 'facebook';
            $facebook->value = $request->facebook;
            $facebook->toggle = (boolean)$request->facebooktoggle;
            $facebook->save();
          }
        }
        if($request->twitter){
          $twitter = Homepage::where('key', 'twitter')->first();
          if($twitter){
            $twitter->value = $request->twitter;
            $twitter->toggle = (boolean)$request->twittertoggle;
            $twitter->save();
          }else{
            $twitter = new Homepage;
            $twitter->key = 'twitter';
            $twitter->value = $request->twitter;
            $twitter->toggle = (boolean)$request->twittertoggle;
            $twitter->save();
          }
        }
        if($request->instagram){
          $instagram = Homepage::where('key', 'instagram')->first();
          if($instagram){
            $instagram->value = $request->instagram;
            $instagram->toggle = (boolean)$request->instagramtoggle;
            $instagram->save();
          }else{
            $instagram = new Homepage;
            $instagram->key = 'instagram';
            $instagram->value = $request->instagram;
            $instagram->toggle = (boolean)$request->instagramtoggle;
            $instagram->save();
          }
        }
        if($request->linkedin){
          $linkedin = Homepage::where('key', 'linkedin')->first();
          if($linkedin){
            $linkedin->value = $request->linkedin;
            $linkedin->toggle = (boolean)$request->linkedintoggle;
            $linkedin->save();
          }else{
            $linkedin = new Homepage;
            $linkedin->key = 'linkedin';
            $linkedin->value = $request->linkedin;
            $linkedin->toggle = (boolean)$request->linkedintoggle;
            $linkedin->save();
          }
        }
        if($request->youtube){
          $youtube = Homepage::where('key', 'youtube')->first();
          if($youtube){
            $youtube->value = $request->youtube;
            $youtube->toggle = (boolean)$request->youtubetoggle;
            $youtube->save();
          }else{
            $youtube = new Homepage;
            $youtube->key = 'youtube';
            $youtube->value = $request->youtube;
            $youtube->toggle = (boolean)$request->youtubetoggle;
            $youtube->save();
          }
        }
        if($request->whatsapp){
          $whatsapp = Homepage::where('key', 'whatsapp')->first();
          if($whatsapp){
            $whatsapp->value = $request->whatsapp;
            $whatsapp->toggle = (boolean)$request->whatsapptoggle;
            $whatsapp->save();
          }else{
            $whatsapp = new Homepage;
            $whatsapp->key = 'whatsapp';
            $whatsapp->value = $request->whatsapp;
            $whatsapp->toggle = (boolean)$request->whatsapptoggle;
            $whatsapp->save();
          }
        }
        return redirect()->back()->with('success', 'Saved!');

    }

}
