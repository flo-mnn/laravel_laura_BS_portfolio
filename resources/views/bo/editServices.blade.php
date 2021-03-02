<section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <span>{{$titles[3]->title}}</span>
        <h2>{{$titles[3]->title}}</h2>
        <p>{{$titles[3]->subtitle}}</p>
      </div>

      <div class="row">
        @foreach ($services as $service)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="{{$service->icon}}"></i></div>
              <h4 class="title"><a href="">{{$service->title}}</a></h4>
              <p class="description">{{$service->text}}</p>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section><!-- End My Services Section -->