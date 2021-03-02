 <!-- ======= Testimonials Section ======= -->
 <section id="testimonials" class="testimonials" style="background-image: url('/storage/img/{{$page_images[2]->src}}');">
  <div class="container">
    <div class="owl-carousel testimonials-carousel">
        <div class="testimonial-item">
          <div class="d-flex  flex-align-items-center justify-content-center w-100 h-100">
            <button type="button" data-toggle="modal" data-target="#edit-bg-img" class="edit-bg btn btn-info rounded-circle px-3 py-2 mx-3" id="testimonial"><i class="bx bx-images"></i></button>
            <button type="button" data-toggle="modal" data-target="#edit-testimonials" class="edit-bg btn btn-warning rounded-circle px-3 py-2 mx-3"><i class="bx bx-edit"></i></button>
          </div>
        </div>
        @foreach ($testimonials as $testimonial)
          <div class="testimonial-item">
            <img src="/storage/img/{{$testimonial->src}}" class="testimonial-img" alt="">
            <h3>{{$testimonial->name}}</h3>
            <h4>{{$testimonial->job}}</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{$testimonial->quote}}
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        @endforeach

      </div>

    </div>
  </section><!-- End Testimonials Section -->