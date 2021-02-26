 <!-- ======= Pricing Section ======= -->
 <section id="pricing" class="pricing">
    <div class="container">

      <div class="section-title">
        <span>{{$titles[5]->title}}</span>
        <h2>{{$titles[5]->title}}</h2>
        <p>{{$titles[5]->subtitle}}</p>
      </div>

      <div class="row">
        @foreach ($pricings as $pricing)
          <div class="col-lg-3 col-md-6 {{$loop->iteration >= 2? 'mt-4' : null}} {{$loop->iteration == 2? 'mt-md-0' : null}} {{$loop->iteration > 2? 'mt-lg-0' : null}}">
            <div class="box {{$pricing->featured? 'featured' : null}}">
              @if ($pricing->advanced)
                <span class="advanced text-capitalized">{{$pricing->advanced}}</span>
              @endif
              <h3>{{$pricing->title}}</h3>
              <h4><sup>{{$pricing->currency}}</sup>{{$pricing->price}}<span> / {{$pricing->frequency}}</span></h4>
              <ul>
                @foreach ($pricing_details as $pricing_detail)
                  <li class="{{$loop->iteration > $pricing->options ? 'na' : null}}">{{$pricing_detail->option}}</li>
                @endforeach
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>
        @endforeach

      </div>

    </div>
  </section><!-- End Pricing Section -->