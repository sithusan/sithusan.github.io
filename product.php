<?php require_once('function/dbCon.php');

      $sql = "select * from tb_brand";
      $result = mysqli_query($conn,$sql);

      $sql1 = "select * from tb_cat";
      $result1 = mysqli_query($conn,$sql1);

 ?>
<?php require_once('header.php'); ?>

        <div class="content mt-3">
                    <div class="card">
                     
                      <div class="card-body card-block">
                        <form action="postProduct.php?action=save" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text"  name="code" class="form-control" placeholder="Please enter product code">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="username" name="title" placeholder="Please enter Product Name" class="form-control">
                            </div>
                          </div>
                           <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <select class = "form-control" name = "brand"> 
                                <?php foreach($result as $data) : ?>
                                <option value ="<?= $data['id'] ?>"><?= $data['title'] ?></option>              
                              <?php endforeach ?>
                              </select>
                            </div>
                          </div>
                          

                           <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <select class = "form-control" name = "category"> 
                                <?php foreach($result1 as $data1) : ?>
                                <option value ="<?= $data1['id'] ?>"><?= $data1['title'] ?></option>              
                              <?php endforeach ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text"  name="price" placeholder="Please enter Price" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text"  name="qty" class="form-control"placeholder = "Please enter quantity">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                            
                              <textarea name = "description" class = "form-control"> Enter Description </textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="file"  name="image" class="form-control">
                            </div>
                          </div>
                          <div class="form-actions form-group"><button type="submit" class="btn btn-primary">Save</button></div>
                        </form>
                      </div>
                    </div>
                  </div>  


    </div>
<?php require_once('footer.php'); ?>
