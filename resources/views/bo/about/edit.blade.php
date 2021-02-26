@extends('templates.back')
@section('content')
    
     <!-- ======= About Me Section ======= -->
     <form action="/bo/about/update" method="post">
        @csrf
 <section id="about" class="about">
     <div class="container">
       <div class="section-title">
         <span>{{$title->title}}</span>
         <h2><input type="text" value="{{$title->title}}" name="titles_title"></h2>
         <p><input type="text" size="80" value="{{$title->subtitle}}" name="titles_subtitle"></p>
       </div>
 
       <div class="row">
         <div class="image col-lg-4 d-flex align-items-end justify-content-center justify-content-lg-start" style="background-image: url('{{$page_images[1]->src}}');"><input type="text" size="30" value="{{$me_img->src}}" name="me_img"></div>
         <div class="col-lg-8 d-flex flex-column align-items-stretch">
           <div class="content pl-lg-4 d-flex flex-column justify-content-center">
             <div class="row">
               <div class="col-lg-6">
                 <ul>
               @foreach ($about_arrows as $about_arrow)
                     <li><i class="icofont-rounded-right"><input type="text" class="d-none" name="about_arrows[{{$about_arrow->id}}][id]" value="{{$about_arrow->id}}"></i> <strong><input class="border border-warning" size="10" type="text" value="{{$about_arrow->title}}" name="about_arrows[{{$about_arrow->id}}][title]"></strong><input type="text" value="{{$about_arrow->info}}" name="about_arrows[{{$about_arrow->id}}][info]"></li>
                 @if (
                   (count($about_arrows) % 2 === 0 && $loop->iteration == (count($about_arrows)/2))
                     ||
                   (count($about_arrows) % 2 != 0 && $loop->iteration == (ceil(count($about_arrows)/2)))
                     )
               </ul>
               
                 </div>    
                 <div class="col-lg-6">
                   <ul>
                 @endif
               @endforeach
                   
                 </ul>
               </div>
             </div>
             <div class="row mt-n4">
               @foreach ($about_numbers as $about_number)
                 <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                   <div class="count-box">
                    <input type="text" class="d-none" name="about_numbers[{{$about_number->id}}][id]" value="{{$about_number->id}}">
                     <i class="{{$about_number->icon}}" style="color:{{$about_number->icon_color}};"></i>
                     <input type="text" name="about_numbers[{{$about_number->id}}][icon]" value={{$about_number->icon}}>
                     <input type="color" size="4" name="about_numbers[{{$about_number->id}}][icon_color]" value={{$about_number->icon_color}}>
                     <span><input type="number" size="4" name="about_numbers[{{$about_number->id}}][number]" value="{{$about_number->number}}"></span>
                     <span data-toggle="counter-up" class="d-none">{{$about_number->number}}</span>
                     <p><strong><input type="text" size="10" name="about_numbers[{{$about_number->id}}][emphasis]" value={{$about_number->emphasis}}></strong> <input type="text" name="about_numbers[{{$about_number->id}}][text]" value="{{$about_number->text}}"></p>
                   </div>
                 </div>
               @endforeach
 
             </div>
           </div><!-- End .content-->
 
           <div class="skills-content pl-lg-4">
             @foreach ($about_digital_skills as $about_digital_skill)
               <div class="progress">
                <input type="text" class="d-none" name="about_digital_skills[{{$about_digital_skill->id}}][id]" value="{{$about_digital_skill->id}}">
                 <span class="skill"><input type="text" name="about_digital_skills[{{$about_digital_skill->id}}][skill]" value={{$about_digital_skill->skill}}> <i class="val"><input type="number" name="about_digital_skills[{{$about_digital_skill->id}}][percentage]" value={{$about_digital_skill->percentage}}>%</i></span>
                 <div class="progress-bar-wrap">
                   <div class="progress-bar" role="progressbar" aria-valuenow="{{$about_digital_skill->percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                 </div>
               </div>
             @endforeach
           </div>
 
         </div>
       </div>
 
     </div>
   </section><!-- End About Me Section -->
   <div class="row ml-auto">
       <div class="d-flex flex-column align-items-end w-100">
           <button type="submit" class="btn btn-primary mr-5 ml-auto my-2">Update All Page</button>
           <a href="/bo/#about"class="btn btn-secondary mr-5 ml-auto my-2">Go back</a>
       </div>
   </div>
</form>
@endsection