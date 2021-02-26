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
    public function update(Request $request){
        // arrows section
        $title = Title::find(2);
        $title->title = $request->titles_title;
        $title->subtitle = $request->titles_subtitle;
        $title->save();

        $about_arrows = $request->input('about_arrows');
    
        foreach ($about_arrows as $row) {
            $arrow = AboutArrow::find($row['id']); 
            $arrow->title = $row['title']; 
            $arrow->info = $row['info']; 
            $arrow->save();
           
        };
        // number section
        $about_numbers = $request->input('about_numbers');
    
        foreach ($about_numbers as $row) {
            $number = AboutNumber::find($row['id']); 
            $number->icon = $row['icon']; 
            $number->icon_color = $row['icon_color']; 
            $number->number = $row['number']; 
            $number->emphasis = $row['emphasis']; 
            $number->text = $row['text']; 
            $number->save();
           
        };
        // digital section
        $about_digital_skills = $request->input('about_digital_skills');
    
        foreach ($about_digital_skills as $row) {
            $skill = AboutDigitalSkill::find($row['id']); 
            $skill->skill = $row['skill']; 
            $skill->percentage = $row['percentage']; 
            $skill->save();
           
        };
        // image
            $me_img = PageImage::find(2);
            $me_img->src = $request->me_img;
            $me_img->save();

        return redirect()->back();
    }
}
