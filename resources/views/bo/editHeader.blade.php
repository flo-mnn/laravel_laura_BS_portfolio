<!-- ======= Header ======= -->
<header id="header" class="fixed-top  d-flex justify-content-center align-items-center bg-warning header-transparent">
    <span class="navbar-brand text-center text-light">Welcome to your back-office</span>
      <nav class="nav-menu d-none d-lg-block edit-parent">
        <button type="button" data-toggle="modal" data-target="#edit-navbar" class="edit btn btn-info rounded-circle px-3 py-2"><i class="bx bx-edit"></i></button>
        <ul>
          <li class="active"><a href="/">{{$navlinks[0]->link}}</a></li>
          <li><a href="#about">{{$navlinks[1]->link}}</a></li>
          <li><a href="#resume">{{$navlinks[2]->link}}</a></li>
          <li><a href="#services">{{$navlinks[3]->link}}</a></li>
          <li><a href="#portfolio">{{$navlinks[4]->link}}</a></li>
          <li><a href="#contact">{{$navlinks[5]->link}}</a></li>
        </ul>
      </nav><!-- .nav-menu -->
  
    </header><!-- End Header -->