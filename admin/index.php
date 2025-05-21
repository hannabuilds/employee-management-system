<?php
  include 'header.php';
  $total_employee_accounts = $function->TotalEmployeeAccounts();
  $total_HR_accounts = $function->TotalHRAccounts();
  $total_manager_accounts = $function->TotalManagerAccounts();
  $total_admin_accounts = $function->TotalAdminAccounts();
?>

  <div class="col-12">
        <div class="row">
         
          <div class="col-6">
           <a href="users.php">
            <div class="card overflow-hidden">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">No. of Employee Account</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3"><?php echo $total_employee_accounts; ?></h4>
                  </div>
                </div>
              </div>
            </div>
           </a>
          </div>


          <div class="col-6">
           <a href="users1.php">
            <div class="card overflow-hidden">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">No. of HR Account</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3"><?php echo $total_HR_accounts; ?></h4>
                  </div>
                </div>
              </div>
            </div>
           </a>
         </div>

      </div>
    </div>

    <div class="col-12">
        <div class="row">

        <div class="col-6">
           <a href="users2.php">
            <div class="card overflow-hidden">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">No. of Manager Account</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3"><?php echo $total_manager_accounts; ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-6">
           <a href="users3.php">
            <div class="card overflow-hidden">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">No. of Admin Account</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3"><?php echo $total_admin_accounts; ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

     </div>
   </div> 

<?php
  include 'footer.php';
?>
