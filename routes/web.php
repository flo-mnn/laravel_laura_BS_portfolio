<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\TestimonialController;
use App\Models\AboutArrow;
use App\Models\AboutDigitalSkill;
use App\Models\AboutNumber;
use App\Models\ContactCardsHead;
use App\Models\Education;
use App\Models\Email;
use App\Models\Experience;
use App\Models\Footer;
use App\Models\Form;
use App\Models\Navlink;
use App\Models\PageButton;
use App\Models\PageImage;
use App\Models\Phone;
use App\Models\PortfolioDetail;
use App\Models\PortfolioFilter;
use App\Models\PortfolioItem;
use App\Models\Pricing;
use App\Models\PricingDetail;
use App\Models\ResumeSubtitle;
use App\Models\ResumeSummary;
use App\Models\Service;
use App\Models\Social;
use App\Models\Testimonial;
use App\Models\Title;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $bo = false;
    return view('welcome', [
        'about_arrows'=>AboutArrow::all(),
        'about_digital_skills'=>AboutDigitalSkill::all(),
        'about_numbers'=>AboutNumber::all(),
        'contact_cards_heads'=>ContactCardsHead::all(),
        'education'=>Education::all(),
        'emails'=>Email::all(),
        'experiences'=>Experience::all(),
        'footers'=>Footer::first(),
        'forms'=>Form::first(),
        'navlinks'=>Navlink::all(),
        // 'page_buttons'=>PageButton::all(),
        'page_images'=>PageImage::all(),
        'phones'=>Phone::all(),
        'portfolio_filters'=>PortfolioFilter::all(),
        'portfolio_items'=>PortfolioItem::all(),
        'pricings'=>Pricing::all(),
        'pricing_details'=>PricingDetail::all(),
        'resume_subtitles'=>ResumeSubtitle::all(),
        'resume_summaries'=>ResumeSummary::first(),
        'services'=>Service::all(),
        'socials'=>Social::all(),
        'testimonials'=>Testimonial::all(),
        'titles'=>Title::all(),
        'bo'=>$bo
    ]);
});
Route::get('/portfolio/show/{id}', function($id){
    $bo = false;

    return view('pages.portfolio-details',[
        'footers'=>Footer::first(),
        'navlinks'=>Navlink::all(),
        'socials'=>Social::all(),
        'page_images'=>PageImage::all(),
        'portfolio_details'=> PortfolioDetail::first(),
        'portfolio_item'=>PortfolioItem::find($id),
        'bo'=>$bo
    ]);
});


// BACK OFFICE

Route::get('/bo', function(){
    $bo = true;
    return view('pages.bo',[
        'about_arrows'=>AboutArrow::all(),
        'about_digital_skills'=>AboutDigitalSkill::all(),
        'about_numbers'=>AboutNumber::all(),
        'contact_cards_heads'=>ContactCardsHead::all(),
        'education'=>Education::all(),
        'emails'=>Email::all(),
        'experiences'=>Experience::all(),
        'footers'=>Footer::first(),
        'forms'=>Form::first(),
        'navlinks'=>Navlink::all(),
        // 'page_buttons'=>PageButton::all(),
        'page_images'=>PageImage::all(),
        'phones'=>Phone::all(),
        'portfolio_details'=> PortfolioDetail::first(),
        'portfolio_filters'=>PortfolioFilter::all(),
        'portfolio_items'=>PortfolioItem::all(),
        'pricings'=>Pricing::all(),
        'pricing_details'=>PricingDetail::all(),
        'resume_subtitles'=>ResumeSubtitle::all(),
        'resume_summaries'=>ResumeSummary::first(),
        'services'=>Service::all(),
        'socials'=>Social::all(),
        'testimonials'=>Testimonial::all(),
        'titles'=>Title::all(),
        'bo'=>$bo
    ]);
});

Route::get('bo/portfolio/edit/{id}', function($id){
    $bo = true;

    return view('pages.portfolio-details',[
        'footers'=>Footer::first(),
        'navlinks'=>Navlink::all(),
        'socials'=>Social::all(),
        'page_images'=>PageImage::all(),
        'portfolio_details'=> PortfolioDetail::first(),
        'portfolio_item'=>PortfolioItem::find($id),
        'bo'=>$bo
    ]);
});

// navbar bo
Route::post('/bo/navbar/update', [NavbarController::class, 'update']);
// hero bo
Route::post('/bo/heroes/title/update', [HeroController::class, 'updateTitle']);
Route::post('/bo/heroes/img/update', [HeroController::class, 'updateImg']);
// about bo
Route::post('/bo/abouts/title/update', [AboutController::class, 'updateTitle']);
Route::post('/bo/about/img/update', [AboutController::class, 'updateImg']);
Route::post('/bo/about/arrow/add', [AboutController::class, 'storeArrow']);
Route::post('/bo/about/arrow/update/{arrow}', [AboutController::class, 'updateArrow']);
Route::post('/bo/about/arrow/delete/{arrow}', [AboutController::class, 'destroyArrow']);
// resume
Route::post('/bo/resumes/title/update', [ResumeController::class, 'updateTitle']);
Route::post('/bo/summary/update', [ResumeController::class, 'updateSummary']);


// section titles
Route::post('/bo/portfolios/title/update', [PortfolioController::class, 'updateTitle']);
Route::post('/bo/contacts/title/update', [ContactController::class, 'updateTitle']);
// testimonials bo
Route::post('/bo/testimonial/img/update', [TestimonialController::class, 'updateImg']);
//socials
Route::post('bo/socials/update',[ContactController::class, 'updateSocial']);
Route::post('bo/socials/delete/{social}',[ContactController::class, 'destroySocial']);
Route::post('/bo/socials/add',[ContactController::class, 'storeSocial']);
// footer
Route::post('/bo/footer/update', [FooterController::class, 'update']);
Route::post('/bo/footers/img/update', [FooterController::class, 'updateImg']);