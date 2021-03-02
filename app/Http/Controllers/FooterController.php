<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\PageImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FooterController extends Controller
{
    public function update(Request $request){
        $update = Footer::first();
        $update->title = $request->title;
        $update->subtitle = $request->subtitle;
        $update->copyright = $request->copyright;
        $update->designed = $request->designed;
        $update->link_name = $request->link_name;
        $update->link = $request->link;

        $update->save();

        return redirect()->back();
    }

    public function updateImg (Request $request) {
        $img = PageImage::find(4);
        // Storage::delete('public/img/'.$img->src);
        Storage::put('public/img/', $request->file('src'));
        $img->src = $request->file('src')->hashName();
        $img->save();
        return redirect()->back();
    }
}
