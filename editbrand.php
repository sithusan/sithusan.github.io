<?php require_once('function/dbCon.php'); 

  $id = $_GET['ebid'];
  $sql = "select * from tb_brand where id = '$id'";
  $result = mysqli_query($conn,$sql);
  
  $query_result = mysqli_fetch_assoc($result);

?>
<?php require_once('header.php'); ?>

        <div class="content mt-3">
                    <div class="card">
                      <div class="card-header"> Edit Brand </div>
                      <div class="card-body card-block">
                        <form action="postbrand.php?action=update" method="POST">
                        <input type="hidden" name="ubid" value = "<?= $query_result['id'] ?>">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="username" name="title" placeholder="Please enter Brand Name" class="form-control" value = "<?= $query_result['title'] ?>">
                            </div>
                          </div>
                          
                          <div class="form-actions form-group"><button type="submit" class="btn btn-primary">Update</button></div>
                        </form>
                      </div>
                    </div>
                  </div>

    </div>



<?php require_once('footer.php'); ?>
