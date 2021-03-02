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
                        <input type="text" class="form-control" placeholder="Your Title" name="title" value="{{$titles[1]->title}}">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Subtitle" name="subtitle" value="{{$titles[1]->subtitle}}">
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