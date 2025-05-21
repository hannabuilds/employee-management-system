<?php
	include 'header.php';
	$user_id = $_GET['user_id'];
  $user = $function->GetEmployeeAcc($user_id);
?>

<div class="container-fluid">
	<div class="card">
	  <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Late</h5>
		    <div class="card w-100">
		      <div class="card-body">
		        <div class="table-responsive">
		          <table class="table text-nowrap mb-0" id="myTable">
		          	<thead class="text-dark">
		              <tr>
		                <th class="border-bottom-0" style="text-align: left;">
		                  <h6 class="fw-semibold mb-0">ID</h6>
		                </th>
		                <th class="border-bottom-0" style="text-align: left;">
		                  <h6 class="fw-semibold mb-0">Date</h6>
		                </th>
		                <th class="border-bottom-0" style="text-align: left;">
		                  <h6 class="fw-semibold mb-0">Time In Status</h6>
		                </th>
		                <th class="border-bottom-0" style="text-align: left;">
		                  <h6 class="fw-semibold mb-0">Late Penalty</h6>
		                </th>
		              </tr>
		            </thead>

		            <tbody>
		            	<?php                         
                      $i = 0;
                      $users = $function->GetEmployeeLate($user_id);
                      if ($users) {
                      foreach ($users as $user):
                      $attend_date = $user['attend_date'];
                      $in_status = $user['in_status'];
                      $late_penalty = $user['late_penalty'];
                      $i++;
                    ?>
		              <tr>
		                <td class="border-bottom-0" style="text-align: left;">
		                   <label class="fw-semibold"><?=$i;?></label>                         
		                </td>
		                <td class="border-bottom-0" style="text-align: left;">
		                 <label><?=$attend_date;?></label>  
		                </td>	
		                <td class="border-bottom-0" style="text-align: left;">
		                  <label><?=$in_status;?></label> 
		                </td>		
		                <td class="border-bottom-0" style="text-align: left;">
		                  <label><?=$late_penalty;?></label> 
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
         <div class="col-3 w-40 py-9 fs-2 pt-2"> 
         <a href="users_LA.php" class="btn btn-primary">Exit</a>
         </div>
	  </div>
	</div>
</div>

<?php
   	include 'footer.php';
?>