<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\ResumeSummary;
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

    public function storeEducation(Request $request){
        $education = new Education;
        $education->title = $request->title;
        $education->start_date = $request->start_date;
        $education->end_date = $request->end_date;
        $education->end_date = $request->end_date;
        $education->place = $request->place;
        $education->text = $request->text;
        $education->save();
        return redirect()->back();
    }

    public function updateEducation(Request $request, Education $education){
        $education->title = $request->title;
        $education->start_date = $request->start_date;
        $education->end_date = $request->end_date;
        $education->end_date = $request->end_date;
        $education->place = $request->place;
        $education->text = $request->text;
        $education->save();
        return redirect()->back();
    }

    public function destroyEducation(Request $request, Education $education){
        
        $education->delete();

        return redirect()->back();
    }

    
}
