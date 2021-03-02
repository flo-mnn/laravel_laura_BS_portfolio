<?php

namespace App\Http\Controllers;

use App\Models\Social;
use App\Models\Title;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function updateTitle(Request $request){
        $title = Title::find(7);
        $title->title = $request->title;
        $title->subtitle = $request->subtitle;
        $title->save();
        return redirect()->back();
    }


    public function storeSocial(Request $request){
        $new = new Social();
        $new->icon = $request->icon;
        $new->url = $request->url;
        $new->save();

        return redirect()->back();
    }


    public function updateSocial(Request $request){
        $update = Social::find($request->id);
        if ($request->icon !=null) {
            $update->icon = $request->icon;
        }
        if ($request->url !=null) {
            $update->url = $request->url;
        }
        $update->save();

        return redirect()->back();
    }

    public function destroySocial(Request $request, Social $social){
       
        $social->delete();

        return redirect()->back();
    }
}
