@extends('templates.back')
@section('content')
     <!-- ======= About Me Section ======= -->
      <section id="about" class="about">
        <div class="container">
          <div class="section-title edit-parent">
            {{-- edit button --}}
            <button type="button" data-toggle="modal" data-target="#edit-about-title" class="edit btn btn-warning rounded-circle px-3 py-2 text-light"><i class="bx bx-edit"></i></button>
            {{-- content --}}
            <span>{{$title->title}}</span>
            <h2>{{$title->title}}</h2>
            <p>{{$title->subtitle}}</p>
          </div>
          
          <div class="row">
            <div class="image p-0 col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start" style="background-image: url('/storage/img/{{$page_images[1]->src}}');">
              <div class="shadow-img d-flex align-items-center justify-content-center">
                <button type="button" data-toggle="modal" data-target="#edit-about-img" class="edit btn btn-warning rounded-circle px-3 py-2 text-light"><i class="bx bx-edit"></i></button>
              </div>
            </div>
           
            <div class="col-lg-8 d-flex flex-column align-items-stretch">
              <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                <div class="row about-arrows">
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
        {{-- MODALS --}}
        <!-- Modal edit title-->
        <div class="modal fade" id="edit-about-title" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="edit-about-title">Change About Header</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="/bo/about/title/update" method="POST" id="update-about-title">
                  @csrf
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Title" name="title" value="{{$title->title}}">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Subtitle" name="subtitle" value="{{$title->subtitle}}">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <input type="submit" class="btn btn-success" value="Update" form="update-about-title">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>
        <!-- Modal edit title end-->
         <!-- Modal img -->
         <div class="modal fade" id="edit-about-img" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="edit-about-img">Change Me Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="/bo/about/img/update" method="POST" id="update-about-img" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <input type="file"  placeholder="Choose a file" name="src" value="{{$me_img->src}}">
                    </div>
                    
                  </form>
                </div>
                <div class="modal-footer">
                  <input type="submit" class="btn btn-success" value="Update" form="update-about-img">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div> 
        <!-- Modal edit img end-->
         <!-- Modal arrow -->
         <div class="modal fade" id="edit-about-arrow" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="edit-about-arrow-title">Change Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="/bo/about/arrow/update/id" method="POST" id="update-about-arrow" >
                  @csrf
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Title : info</span>
                    </div>
                    <input type="text" id="title" class="form-control" name="title">
                    <input type="text" id="info" class="form-control" name="info">
                  </div>
                    
                  </form>
                </div>
                <div class="modal-footer">
                  <input type="submit" class="btn btn-success" value="Update" form="update-about-arrow">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div> 
        <!-- Modal edit arrow end-->
      </section><!-- End About Me Section -->

@endsection