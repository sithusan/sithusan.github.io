<?php require_once('header.php'); ?>

        <div class="content mt-3">
                    <div class="card">
                      <div class="card-header">Create Category</div>
                      <div class="card-body card-block">
                        <form action="postCategory.php?action=save" method="POST">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="username" name="title" placeholder="Please enter Category Name" class="form-control">
                            </div>
                          </div>
                          
                          <div class="form-actions form-group"><button type="submit" class="btn btn-primary">Save</button></div>
                        </form>
                      </div>
                    </div>
                  </div>  


    </div>
<?php require_once('footer.php'); ?>
