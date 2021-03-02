<?php

namespace App\Http\Controllers;

use App\Models\PageImage;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    public function updateTitle (Request $request) {
        $update = Title::find(1);
        $update->title = $request->title;
        $update->subtitle = $request->subtitle;
        $update->save();

        return redirect()->back();
    }

    public function updateImg (Request $request) {
        $img = PageImage::find(1);
        // Storage::delete('public/img/'.$img->src);
        Storage::put('public/img/', $request->file('src'));
        $img->src = $request->file('src')->hashName();
        $img->save();
        return redirect()->back();
    }
}
