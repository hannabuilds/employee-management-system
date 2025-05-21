<?php
  include 'header.php';
   $total_employee_accounts = $function->TotalEmployeeAccounts();
?>

      <div class="col-12 d-flex align-items">
        <div class="row">
          <div class="col-lg-12">
           
            <div class="card overflow-hidden">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Total Number of Employee</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3"><?php echo $total_employee_accounts; ?></h4>
                    <div class="d-flex align-items-center mb-3">
                      
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