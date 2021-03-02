<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function updateTitle(Request $request){
        $title = Title::find(5);
        $title->title = $request->title;
        $title->subtitle = $request->subtitle;
        $title->save();
        return redirect()->back();
    }
}
