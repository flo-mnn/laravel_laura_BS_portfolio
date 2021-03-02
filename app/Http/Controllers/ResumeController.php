<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function updateTitle(Request $request){
        $title = Title::find(3);
        $title->title = $request->title;
        $title->subtitle = $request->subtitle;
        $title->save();
        return redirect()->back();
    }
}
