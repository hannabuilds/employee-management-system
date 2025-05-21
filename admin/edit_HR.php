<?php
  include 'header.php';
  $user_id = $_GET['user_id'];
  $user = $function->GetHRInfo($user_id);
?>

    <!--  Row 1 -->
    <div class="row">

      <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
            <?php
                  $msg = Session::get("msg");
                  if(isset($msg)){
                    echo $msg;
                    Session::set("msg", NULL);
                  }
             ?> 
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <img src="../assets/images/logos/luna.png" width="250" alt="" style="display: block; margin-left: auto; margin-right: auto;">

                  <?php
                    if($user)
                   { 
                     $user_id = $user->HR_ID;
                     $user_name = $user->name;
                     $user_username = $user->username;
                     $user_password = $user->password;
                     $user_task = $user->task;
                   ?> 
                <form method="post" action="navigate.php?user_id=<?=$user_id;?>">
                  <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" name="name" value="<?=($user_name)?$user_name:'';?>">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputEmail" class="form-label">User ID</label>
                    <input type="text" class="form-control" id="exampleInputEmail" name="username" value="<?=($user_username)?$user_username:'';?>">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputTask" class="form-label">Task</label>
                    <input type="text" class="form-control" id="exampleInputTask" name="task" value="<?=($user_task)?$user_task:'';?>">
                  </div>
                  <div class="mb-5">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?=($user_password)?$user_password:'';?>">
                  </div>
                  <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit" name="btn-edit-hr">Update Account</button>
                </form>
                 <?php
                   }
                 ?>
              </div>
            </div>
          </div>
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
