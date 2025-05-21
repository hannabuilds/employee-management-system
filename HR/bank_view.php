<?php
  include 'header.php';
  $user_id = $_GET['user_id'];
  $user = $function->GetEmployeeBank($user_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-10"><h5 class="card-title fw-semibold mb-4">Employee Bank Information</h5></div>
     <?php
       $msg = Session::get("msg");
       if(isset($msg)){
       echo $msg;
       Session::set("msg", NULL);
        }
     ?>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table text-nowrap mb-0">
                <?php
                    if($user)
                   { 
                     $user_id = $user->emp_ID;
                     $user_accName = $user->acc_name;
                     $user_accNo = $user->acc_no;
                     $user_bankName = $user->bank_name;
                  ?> 
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Employee ID:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_id;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Account Name:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_accName;?></label>
                    </td>                   
                  </tr>
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Account No:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_accNo;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Bank Name:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_bankName;?></label>
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
      <div class="col-3 w-40 py-9 fs-2 pt-2"> 
      <a href="users_bank.php" class="btn btn-primary">Exit</a>
     </div>
    </div>
  </div>
</div>

<?php 
  include 'footer.php';
?>