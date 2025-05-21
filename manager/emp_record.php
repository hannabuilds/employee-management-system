<?php
	include 'header.php';
	$user_id = $_GET['user_id'];
  $user = $function->GetEmployeeAcc($user_id);
?>

<div class="container-fluid">
	<div class="card">
	  <div class="card-body">
	    <h5 class="card-title fw-semibold mb-4">Time-in/out History</h5> 
    	<div class="col-lg-12 d-flex align-items-stretch">
		    <div class="card w-100">
		      <div class="card-body">
		        <div class="table-responsive">
		          <table class="table text-nowrap mb-0 align-middle" id="myTable">
		            <thead class="text-dark">
		              <tr>
		              	<th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0" style="text-align: left;">ID</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Date</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Status</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Time-in</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">In Status</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Time-out</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Out Status</h6>
		                </th>
		              </tr>
		            </thead>
		            <tbody>
		            	<?php                         
                      $i = 0;
                      $users = $function->GetEmployeeAttendance($user_id);
                      if ($users) {
                      foreach ($users as $user):
                      $attend_date = $user['attend_date'];
                      $attend_status = $user['attend_status'];
                      $time_in = $user['time_in'];
                      $in_status = $user['in_status'];
                      $time_out = $user['time_out'];
                      $out_status = $user['out_status'];
                      $i++;
                    ?>

		              <tr>
		              	<td class="border-bottom-0">
		                  <label class="fw-semibold"><?=$i;?></label>
		                </td>
		                <td class="border-bottom-0">
		                  <label><?=$attend_date;?></label>                          
		                </td>
		                <td class="border-bottom-0">
		                  <label><?=$attend_status;?></label>
		                </td>
		                <td class="border-bottom-0">
		                  <label><?=$time_in;?></label>
		                </td>	
		                <td class="border-bottom-0">
		                  <label><?=$in_status;?></label>
		                </td>
		                <td class="border-bottom-0">
		                  <label><?=$time_out;?></label>
		                </td>
		                <td class="border-bottom-0">
		                  <label><?=$out_status;?></label>
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
      <div class="align-items-right w-40 py-9 fs-2 pt-2">  
        <a href="users_rec.php" class="btn btn-primary">Exit</a>
      </div>
	  </div>
	</div>
</div>


   <?php
   	include 'footer.php';
   ?>