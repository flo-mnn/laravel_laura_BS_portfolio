{{-- MODALS --}}
        <!-- Modal edit bg img-->
        <div class="modal fade" id="edit-bg-img" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="edit-bg-img">Change Background Image</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/bo/hero/img/update" method="POST" id="update-bg-img" enctype="multipart/form-data">
                    @csrf
                      <input type="file" name="src">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Update" form="update-bg-img">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
        </div>
          <!-- Modal edit bg img-->
        <!-- Modal edit navbar-->
        <div class="modal fade" id="edit-navbar" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="edit-navbar">Change Navbar Titles</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/bo/navbar/update" method="POST" id="update-navlink">
                    @csrf
                      @foreach ($navlinks as $navlink)
                      
                      @if ($navlink->id !=4)  {{--do not display services section--}}   
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your NavLink #{{$navlink->id}}" name="link[{{$navlink->id}}]" value="{{$navlink->link}}">
                        </div>
                      @endif
                      @endforeach
                      
                    </form>
                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Update" form="update-navlink">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
        </div>
          <!-- Modal edit navbar end-->
        <!-- Modal edit section title-->
        <div class="modal fade" id="edit-title" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="edit-title">Change Section Header</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/bo/section/title/update" method="POST" id="update-title">
                    @csrf
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Title" id="section-title-input" name="title" value="{{$titles[1]->title}}">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Subtitle" id="section-subtitle-input" name="subtitle" value="{{$titles[1]->subtitle}}">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Update" form="update-title">
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
                        <input type="file"  placeholder="Choose a file" name="src" value="{{$page_images[1]->src}}">
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
                  <div class="modal-footer footer-update">
                    <input type="submit" class="btn btn-success" value="Update" form="update-about-arrow">
                    <form action="/bo/about/arrow/delete/id" method="POST" id="delete-arrow">
                    @csrf
                    <button type="submit" class="btn btn-danger">delete</button>
                    </form>  
                  </div>
                  <div class="modal-footer footer-create d-none">
                    <input type="submit" class="btn btn-primary" value="Add" form="update-about-arrow">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                  </div>
              </div>
            </div>
        </div> 
          <!-- Modal edit arrow end-->

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
                  <div class="modal-footer footer-update">
                    <input type="submit" class="btn btn-success" value="Update" form="update-about-arrow">
                    <form action="/bo/about/arrow/delete/id" method="POST" id="delete-arrow">
                    @csrf
                    <button type="submit" class="btn btn-danger">delete</button>
                    </form>  
                  </div>
                  <div class="modal-footer footer-create d-none">
                    <input type="submit" class="btn btn-primary" value="Add" form="update-about-arrow">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                  </div>
              </div>
            </div>
        </div> 
          <!-- Modal edit arrow end-->


           <!-- Modal edit education -->
           <div class="modal fade" id="edit-education" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="edit-education">Edit Education Item</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/bo/education/update/id" method="POST" id="update-about-arrow" >
                    @csrf
                    <div class="form-group">
                      <label >Title</label>
                      <input class="form-control" type="text" name="title" value="{{$footers->title}}">
                    </div>
                    </form>
                  </div>
                  <div class="modal-footer footer-update">
                    <input type="submit" class="btn btn-success" value="Update" form="update-about-arrow">
                    <form action="/bo/about/arrow/delete/id" method="POST" id="delete-arrow">
                    @csrf
                    <button type="submit" class="btn btn-danger">delete</button>
                    </form>  
                  </div>
                  <div class="modal-footer footer-create d-none">
                    <input type="submit" class="btn btn-primary" value="Add" form="update-about-arrow">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                  </div>
              </div>
            </div>
        </div> 
          <!-- Modal edit education end-->


           <!-- Modal socials -->
        <div class="modal fade" id="edit-socials" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="edit-socials">Change Social Media</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/bo/socials/update" method="POST" id="update-socials" >
                    @csrf
                    <div class="form-group">
                      <label >Please select social media icon</label>
                      <select class="form-control" name="id">
                        @foreach ($socials as $social)
                            <option value="{{$social->id}}">{{$social->icon}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label >To Update, enter the new icon name first</label>
                      <input class="form-control" type="text" name="icon" value="" aria-describedby="iconHelp">
                      <small id="iconHelp" class="form-text text-muted">Please go to <a href="https://boxicons.com/" target="_blank">BoxIcons</a> and filter "Logos" to find your new icon</small>
                    </div>
                    <div class="form-group">
                      <label >Please enter your social media new link</label>
                      <input class="form-control" type="text" name="url" value="">
                    </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Update" form="update-socials">
                    <form action="/bo/socials/delete/{{$socials[0]->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">delete</button>
                    </form>  
                  </div>
              </div>
            </div>
        </div> 
          <!-- Modal socials end-->
           <!-- Modal socials add-->
        <div class="modal fade" id="add-socials" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="add-socials">Add Social Media</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/bo/socials/add" method="POST" id="add-social" >
                    @csrf
                    <div class="form-group">
                      <label >Please enter the new icon name</label>
                      <input class="form-control" type="text" name="icon" value="" placeholder="example: facebook" aria-describedby="iconHelp">
                      <small id="iconHelp" class="form-text text-muted">Please go to <a href="https://boxicons.com/" target="_blank">BoxIcons</a> and filter "Logos" to find your new icon</small>
                    </div>
                    <div class="form-group">
                      <label >Please enter your new social media link</label>
                      <input class="form-control" type="text" name="url" value="">
                    </div>
                      
                    </form>
                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Add" form="add-social">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
        </div> 
          <!-- Modal socials add end-->
           <!-- Modal footer general -->
        <div class="modal fade" id="edit-footer" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="edit-footer">Change Social Media</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/bo/footer/update" method="POST" id="update-footer" >
                    @csrf
                    <div class="form-group">
                      <label >Title</label>
                      <input class="form-control" type="text" name="title" value="{{$footers->title}}">
                    </div>
                    <div class="form-group">
                      <label >Subtitle</label>
                      <textarea class="form-control" type="text" name="subtitle" >{{$footers->subtitle}}</textarea>
                    </div>
                    <div class="form-group">
                      <label >Copyright Text</label>
                      <input class="form-control" type="text" name="copyright" value="{{$footers->copyright}}">
                    </div>
                    <div class="form-group">
                      <label >Designed By text</label>
                      <input class="form-control" type="text" name="designed" value="{{$footers->designed}}">
                    </div>
                    <div class="form-group">
                      <label >Designer Name</label>
                      <input class="form-control" type="text" name="link_name" value="{{$footers->link_name}}">
                    </div>
                    <div class="form-group">
                      <label >Designer Link</label>
                      <input class="form-control" type="text" name="link" value="{{$footers->link}}">
                    </div>
                    
                      
                    </form>
                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Update" form="update-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
        </div> 
          <!-- Modal footer general end-->