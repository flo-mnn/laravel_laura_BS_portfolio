<?php

namespace App\Http\Controllers;

use App\Models\Navlink;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function update(Request $request)
    {
        for ($i=1; $i < count(Navlink::all()); $i++) { 
            $update = Navlink::find($i);
            $update->link = $request->link[$i];
            $update->save();
        }
        return redirect()->back();
    }

}
