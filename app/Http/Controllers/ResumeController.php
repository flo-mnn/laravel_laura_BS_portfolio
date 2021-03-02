<?php

namespace App\Http\Controllers;

use App\Models\ResumeSummary;
use App\Models\Title;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function updateSummary(Request $request){
        $update = ResumeSummary::first();
        $update->name = $request->name;
        $update->text = $request->text;
        $update->address = $request->address;
        $update->phone = $request->phone;
        $update->email = $request->email;
        $update->save();
        return redirect()->back();
    }

    public function updateTitle(Request $request){
        $title = Title::find(3);
        $title->title = $request->title;
        $title->subtitle = $request->subtitle;
        $title->save();
        return redirect()->back();
    }
}
