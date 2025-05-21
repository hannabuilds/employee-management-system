<?php
	include 'header.php';
	$user = $_SESSION['emp_acc_ID'];
  $employee = $function->GetEmployeeAcc($user);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Overtime Rate</h5>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle" id="myTable">
                <thead class="text-dark">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0" style="text-align: left;">Overtime ID</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Date</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Time Out Status</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0" style="text-align: left;">Rate</h6>
                    </th>
                  </tr>
                </thead>

                <tbody>
                  <?php                         
                      $i = 0;
                      $users = $function->GetEmployeeOvertime($user);
                      if ($users) {
                      foreach ($users as $user):
                      $attend_date = $user['attend_date'];
                      $out_status = $user['out_status'];
                      $ot_rate = $user['ot_rate'];
                      $i++;
                    ?>
                  <tr>
                    <td class="border-bottom-0" style="text-align: left;">
                      <label class="fw-semibold"><?=$i;?></label>                          
                    </td>
                    <td class="border-bottom-0">
                      <label><?=$attend_date;?></label>  
                    </td>   
                    <td class="border-bottom-0">
                      <label><?=$out_status;?></label>
                    </td>
                    <td class="border-bottom-0" style="text-align: left;">
                     <label><?=$ot_rate;?></label>
                    </td>               
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
      <div class="col-3 w-40 py-9 fs-2 pt-2"> 
      <a href="index.php" class="btn btn-primary">Exit</a>
     </div>

    </div>
  </div>
</div>

<?php
   	include 'footer.php';
?>