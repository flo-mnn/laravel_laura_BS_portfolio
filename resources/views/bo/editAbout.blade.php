
     <!-- ======= About Me Section ======= -->
      <section id="about" class="about">
        <div class="container">
          <div class="section-title edit-parent">
            {{-- edit button --}}
            <button type="button" data-toggle="modal" data-target="#edit-title" id="abouts" class="edit edit-title btn btn-warning rounded-circle px-3 py-2 text-light"><i class="bx bx-edit"></i></button>
            {{-- content --}}
            <div class="title-update-div">
              <span>{{$titles[1]->title}}</span>
              <h2>{{$titles[1]->title}}</h2>
              <p>{{$titles[1]->subtitle}}</p>
            </div>
          </div>
          
          <div class="row">
            <div class="image p-0 col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start" style="background-image: url('/storage/img/{{$page_images[1]->src}}');">
              <div class="shadow-img d-flex align-items-center justify-content-center">
                <button type="button" data-toggle="modal" data-target="#edit-about-img" class="edit btn btn-warning rounded-circle px-3 py-2 text-light"><i class="bx bx-edit"></i></button>
              </div>
            </div>
           
            <div class="col-lg-8 d-flex flex-column align-items-stretch">
              <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                <div class="row about-arrows add-parent">
                  <button type="button" data-toggle="modal" data-target="#edit-about-arrow" class="add create-arrow btn btn-primary rounded-circle px-3 py-2"><i class="bx bx-list-plus"></i></button>
                  <div class="col-lg-6">
                    <ul>
                  @foreach ($about_arrows as $about_arrow)
                  <li class="edit-parent">
                    <button type="button" data-toggle="modal" data-target="#edit-about-arrow" class="edit btn btn-warning rounded-circle px-3 py-2" id="{{$about_arrow->id}}"><i class="bx bx-edit"></i></button>
                    <i class="icofont-rounded-right"></i> <strong>{{$about_arrow->title}}</strong> <span>{{$about_arrow->info}}</span>
                        </li>
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
                        <i class="{{$about_number->icon}}" style="color:{{$about_number->icon_color}};"></i>
                        <span data-toggle="counter-up">{{$about_number->number}}</span>
                        <p><strong>{{$about_number->emphasis}}</strong> {{$about_number->text}}</p>
                      </div>
                    </div>
                  @endforeach

                </div>
              </div><!-- End .content-->

              <div class="skills-content pl-lg-4">
                @foreach ($about_digital_skills as $about_digital_skill)
                  <div class="progress">
                    <span class="skill">{{$about_digital_skill->skill}} <i class="val">{{$about_digital_skill->percentage}}%</i></span>
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
