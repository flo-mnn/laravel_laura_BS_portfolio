<?php

namespace App\Http\Controllers;

use App\Models\AboutArrow;
use App\Models\AboutDigitalSkill;
use App\Models\AboutNumber;
use App\Models\Footer;
use App\Models\Navlink;
use App\Models\PageImage;
use App\Models\Social;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
   

    public function updateTitle(Request $request){
        $title = Title::find(2);
        $title->title = $request->title;
        $title->subtitle = $request->subtitle;
        $title->save();
        return redirect()->back();
    }

    public function updateImg(Request $request){
        $img = PageImage::find(2);
        Storage::delete('public/img/'.$img->src);
        Storage::put('public/img/', $request->file('src'));
        $img->src = $request->file('src')->hashName();
        $img->save();
        return redirect()->back();
    }

    public function storeArrow(Request $request){
        $arrow = new AboutArrow();
        $arrow->title = $request->title;
        $arrow->info = $request->info;
        $arrow->save();
        return redirect()->back();
    }

    public function updateArrow(Request $request, AboutArrow $arrow){
        // $arrow = AboutArrow::find($id);
        $arrow->title = $request->title;
        $arrow->info = $request->info;
        $arrow->save();
        return redirect()->back();
    }

    public function destroyArrow(Request $request, AboutArrow $arrow){
        $arrow->delete();

        return redirect()->back();
    }
}
