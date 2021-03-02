<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class ContactController extends Controller
{
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
