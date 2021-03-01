 <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials" style="background-image: url('/storage/img/{{$page_images[2]->src}}');">
    <div class="container">

      <div class="owl-carousel testimonials-carousel">
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