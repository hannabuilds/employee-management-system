<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">List of Manager</h5>
      <a href="manager_acc.php" class="btn btn-info col-1 align-items-left w-40 py-8 fs-2 pt-2 rounded-2 mb-4">Add</a>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body"> 
             <?php
              $msg = Session::get("msg");
              if(isset($msg)){
              echo $msg;
              Session::set("msg", NULL);
              }
             ?> 
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle" id="myTable">
                <thead class="text-dark">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0" style="text-align: left;">Id</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Name</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Department</h6>
                    </th>                   
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Action</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <?php                         
                          $i = 0;
                          $users = $function->GetAllManager();
                          if ($users) {
                            foreach ($users as $user):
                              $user_id = $user['manager_ID'];
                              $manager_name = $user['name'];
                              $manager_dept = $user['dept'];
                              $i++;
                            ?>
                          <tr>
                            <td style="text-align: left;"><label class="fw-semibold"><?=$i;?></label></td>                           
                            <td><label><?=$manager_name;?></label></td>
                            <td><label><?=$manager_dept;?></label></td>
                            <td>
                              <form method="post" action="navigate.php">
                                <a href="manager_info.php?user_id=<?=$user_id;?>" class="badge btn bg-success rounded-3 fw-semibold">View</a>
                                <a href="edit_manager.php?user_id=<?=$user_id;?>" class="badge btn bg-primary rounded-3 fw-semibold">Update</a> &nbsp;
                                <input type="hidden" name="manager_ID" value="<?=$user_id;?>">
                                <button class="badge btn btn-danger rounded-3" type="submit" name="btn-delete-manager">Delete</button></td> 
                              </form>                       
                          </tr>

                      <?php

                            endforeach;
                          }

                        ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  include 'footer.php';
?>