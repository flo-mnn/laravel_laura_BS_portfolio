 <!-- ======= My Resume Section ======= -->
 <section id="resume" class="resume">
    <div class="container">

      <div class="section-title edit-parent">
        <button type="button" data-toggle="modal" data-target="#edit-title" id="resumes" class="edit edit-title btn btn-warning rounded-circle px-3 py-2 text-light"><i class="bx bx-edit"></i></button>
        <div class="title-update-div">   
          <span>{{$titles[2]->title}}</span>
          <h2>{{$titles[2]->title}}</h2>
          <p>{{$titles[2]->subtitle}}</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">{{$resume_subtitles[0]->title}}</h3>
          <div class="resume-item pb-0 edit-parent">
           <button type="button" data-toggle="modal" data-target="#edit-summary" class="edit btn btn-warning rounded-circle px-3 py-2"><i class="bx bx-edit"></i></button>
            <h4>{{$resume_summaries->name}}</h4>
            <p><em>{{$resume_summaries->text}}</em></p>
            <p>
            <ul>
              <li>{{$resume_summaries->address}}</li>
              <li>{{$resume_summaries->phone}}</li>
              <li>{{$resume_summaries->email}}</li>
            </ul>
            </p>
          </div>
          <div class="add-parent">
            <button type="button" data-toggle="modal" data-target="#edit-education" class="create-education add btn btn-primary rounded-circle px-3 py-2"><i class="bx bx-list-plus"></i></button>
            <h3 class="resume-title">{{$resume_subtitles[1]->title}}</h3>
            @for ($i = count($education)-1; $i >= 0; $i--)
              <div class="resume-item education-item edit-parent">
                <button type="button" data-toggle="modal" data-target="#edit-education" class="edit edit-education-btn btn btn-warning rounded-circle px-3 py-2" id="{{$education[$i]->id}}"><i class="bx bx-edit"></i></button>
                <h4>{{$education[$i]->title}}</h4>
                <h5><span class="start">{{$education[$i]->start_date}}</span> - <span class="end">{{$education[$i]->end_date? ($education[$i]->end_date != $education[$i]->start_date ? $education[$i]->end_date : null) : ' Present'}}</span></h5>
                <p><em>{{$education[$i]->place}}</em></p>
                <p class="ed-text">{{$education[$i]->text}}</p>
              </div>
            @endfor
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">{{$resume_subtitles[2]->title}}</h3>
          @for ($i = count($experiences)-1; $i >=0 ; $i--)
            <div class="resume-item edit-parent">
              
              <h4>{{$experiences[$i]->title}}</h4>
              <h5>{{$experiences[$i]->start_date}} {{$experiences[$i]->end_date? ($experiences[$i]->end_date != $experiences[$i]->start_date ? '-'.$experiences[$i]->end_date: null) : '- Present'}}</h5>
              <p><em>{{$experiences[$i]->place}} </em></p>
              <p>
              <ul>
                <li>{{$experiences[$i]->task1}}</li>
                <li>{{$experiences[$i]->task2}}</li>
                <li>{{$experiences[$i]->task3}}</li>
                <li>{{$experiences[$i]->task4}}</li>
              </ul>
              </p>
            </div>
          @endfor
        </div>
      </div>

    </div>
  </section><!-- End My Resume Section -->