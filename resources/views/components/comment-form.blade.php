<div class="row d-flex ">
              <div class="col-md-8">
                <div class="card p-3 mt-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center"> 
                      <img src="https://i.imgur.com/hczKIze.jpg" width="30" class="user-img rounded-circle mr-2">
                        <span><small class="font-weight-bold text-primary">james_olesenn</small></span>
                    </div>
                  </div>
                  <form action="" method="POST">
                    @csrf()
                    <div class="form-group"><br>
                      <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-block">Add a Comment</button>
                  </form>
                </div>
              </div>
            </div>