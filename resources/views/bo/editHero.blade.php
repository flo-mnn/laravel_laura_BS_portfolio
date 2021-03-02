<!-- ======= Hero Section ======= -->
<section id="hero" style="background-image: url('storage/img/{{$page_images[0]->src}}');" class="edit-bg-parent">
    <div class="hero-container">
        <button type="button" data-toggle="modal" data-target="#edit-hero-img" class="edit-bg btn btn-info rounded-circle px-3 py-2 m-5 ml-auto"><i class="bx bx-edit"></i></button>
       <div class="text-center edit-parent">
        <button type="button" data-toggle="modal" data-target="#edit-hero-title" class="edit btn btn-warning rounded-circle px-3 py-2"><i class="bx bx-edit"></i></button>
           <h1>{{$titles[0]->title}}</h1>
           <h2>{{$titles[0]->subtitle}}</h2>
       </div>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">