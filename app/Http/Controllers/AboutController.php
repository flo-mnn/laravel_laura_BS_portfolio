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
    public function edit(){
        return view('bo.about.edit', [
            'footers'=>Footer::first(),
            'navlinks'=>Navlink::all(),
            'socials'=>Social::all(),
            'page_images'=>PageImage::all(),
            'me_img'=>PageImage::find(2),
            'title'=>Title::find(2),
            'about_arrows'=>AboutArrow::all(),
            'about_numbers'=>AboutNumber::all(),
            'about_digital_skills'=>AboutDigitalSkill::all()
        ]);
    }
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
}
