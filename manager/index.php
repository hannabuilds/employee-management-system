<?php
  include 'header.php';
  $total_male = $function->TotalMaleEmployee();
  $total_female = $function->TotalFemaleEmployee();
?>

    <!--  Row 1 -->
    <div class="row">

      <div class="col-lg-12">
        <div class="row">
          <a href="">
          <div class="col-lg-12">
            <div class="card overflow-hidden">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Total Number of Female Employee</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3"><?php echo $total_female; ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </a>
        </div>
      </div>

      <div class="col-lg-12">
        <div class="row">
         <a href="">
          <div class="col-lg-12">
            <div class="card overflow-hidden">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Total Number of Male Employee</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3"><?php echo $total_male; ?></h4>
                  </div>
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