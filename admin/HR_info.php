<?php
  include 'header.php';
  $user_id = $_GET['user_id'];
  $user = $function->GetHRInfo($user_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Account Information</h5>
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
              <table class="table text-nowrap mb-0">
                 <?php
                    if($user)
                   { 
                     $user_id = $user->HR_ID;
                     $user_name = $user->name;
                     $user_username = $user->username;
                     $user_password = $user->password;
                     $user_task = $user->task;
                  ?> 
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Name:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_name;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Username:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_username;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Password:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_password;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Task:</h6>
                    </th> 
                    <td class="border-bottom-0">
                      <label><?=$user_task;?></label>
                    </td>                  
                  </tr>
                  <?php
                   }
                  ?>
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