<?php
  include 'header.php';
  $user_id = $_GET['user_id'];
  $user = $function->GetEmployeeAcc($user_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Employee's Information</h5>
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
                     $user_id = $user->emp_acc_ID;
                     $user_username = $user->username;
                     $user_password = $user->password;
                     $user_firstname = $user->first_name;
                     $user_lastname = $user->last_name;
                     $user_position = $user->position;
                     $user_standing = $user->standing;
                  ?> 
                  <tr> 
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Username:</h6>
                    </td>
                    <td class="border-bottom-0">
                      <label><?=$user_username;?></label>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Password:</h6>
                    </td>
                    <td class="border-bottom-0">
                      <label><?=$user_password;?></label>
                    </td>                   
                  </tr>

                  <tr> 
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">First Name:</h6>
                    </td>
                    <td class="border-bottom-0">
                      <label><?=$user_firstname;?></label>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Last Name:</h6>
                    </td>
                    <td class="border-bottom-0">
                      <label><?=$user_lastname;?></label>
                    </td>                   
                  </tr>

                  <tr> 
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Position:</h6>
                    </td>
                    <td class="border-bottom-0">
                      <label><?=$user_position;?></label>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Standing:</h6>
                    </td>
                    <td class="border-bottom-0">
                      <label><?=$user_standing;?></label>
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