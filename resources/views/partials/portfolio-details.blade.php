 <!-- ======= Breadcrumbs Section ======= -->
 <section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>{{$portfolio_item->title}}</h2>
      <ol>
        <li><a href="{{$bo? '/bo/' : '/'}}">Home</a></li>
        <li><a href="{{$bo? '/bo/#portfolio' : '/#portfolio'}}">Portfolio</a></li>
        <li>{{$portfolio_item->title}}</li>
      </ol>
    </div>

  </div>
</section><!-- Breadcrumbs Section -->
 <!-- ======= Portfolio Details Section ======= -->
 <section class="portfolio-details">
    <div class="container">

      <div class="portfolio-details-container">

        <div class="owl-carousel portfolio-details-carousel">
          <img src="{{$portfolio_item->src1}}" class="img-fluid" alt="">
          <img src="{{$portfolio_item->src2}}" class="img-fluid" alt="">
          <img src="{{$portfolio_item->src3}}" class="img-fluid" alt="">
        </div>

        <div class="portfolio-info">
          <h3>{{$portfolio_details->title}}</h3>
          <ul>
            <li><strong>{{$portfolio_details->cat}}</strong>: {{$portfolio_item->category}}</li>
            <li><strong>{{$portfolio_details->client}}</strong>: {{$portfolio_item->client}}</li>
            <li><strong>{{$portfolio_details->date}}</strong>: {{$portfolio_item->date}}</li>
            <li><strong>{{$portfolio_details->url}}</strong>: <a href="{{$portfolio_item->url}}">{{$portfolio_item->url}}</a></li>
          </ul>
        </div>

      </div>

      <div class="portfolio-description">
        <h2>{{$portfolio_item->title}}</h2>
        <p>
          {{$portfolio_item->text}}
        </p>
      </div>
    </div>
  </section><!-- End Portfolio Details Section -->