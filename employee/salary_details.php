<?php
  include 'header.php';
  $salary_id = $_GET['salary_ID'];
  $salary = $function->GetSalary($salary_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Salary</h5>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table text-nowrap mb-0">
                 <?php
                    if($salary)
                   { 
                     $monthly_rate = $salary->monthly_rate;
                     $overtime_rate = $salary->overtime_rate;
                     $philhealth = $salary->philhealth;
                     $SSS = $salary->SSS;
                     $pagibig = $salary->pagibig;
                     $TIN_ID = $salary->TIN_ID;
                     $penalties = $salary->penalties;
                     $total_deduction = $salary->total_deduction;
                     $total_salary = $salary->total_salary;
                     $date_given = $salary->date_given;
                   ?>

                  <tr>
                   <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Date Given:</h6>
                   </td>
                   <td class="border-bottom-0">
                    <label><?=$date_given;?></label>
                   </td>
                  </tr>

                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Rate:</h6>
                    </td>
                    <td class="border-bottom-0">
                       <label>₱<?=$monthly_rate;?></label>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Overtime Rate:</h6>
                    </td>
                    <td class="border-bottom-0">
                       <label>₱<?=$overtime_rate;?></label>
                    </td>                   
                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">PhilHealth:</h6>
                    </td>
                    <td class="border-bottom-0">
                       <label>₱<?=$philhealth;?></label>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Pag-ibig:</h6>
                    </td>
                    <td class="border-bottom-0">
                       <label>₱<?=$pagibig;?></label>
                    </td>                   
                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">SSS:</h6>
                    </td>
                    <td class="border-bottom-0">
                       <label>₱<?=$SSS;?></label>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">TIN ID:</h6>
                    </td>
                    <td class="border-bottom-0">
                       <label>₱<?=$TIN_ID;?></label>
                    </td>                   
                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Penalties:</h6>
                    </td>
                    <td class="border-bottom-0">
                       <label>₱<?=$penalties;?></label>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Total Deduction:</h6>
                    </td>
                    <td class="border-bottom-0">
                       <label>₱<?=$total_deduction;?></label>
                    </td>                  
                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Total Salary:</h6>
                    </td>
                    <td class="border-bottom-0">
                     <label class="fw-semibold"> <u>₱<?=$total_salary;?></u></label>
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