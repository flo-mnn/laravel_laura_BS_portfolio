<?php

namespace App\Http\Controllers;

use App\Models\PageImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function updateImg (Request $request) {
        $img = PageImage::find(3);
        // Storage::delete('public/img/'.$img->src);
        Storage::put('public/img/', $request->file('src'));
        $img->src = $request->file('src')->hashName();
        $img->save();
        return redirect()->back();
    }
}
