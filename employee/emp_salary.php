<?php
	include 'header.php';
	$user = $_SESSION['emp_acc_ID'];
  $employee = $function->GetEmployeeByUsername($user);
?>

<div class="container-fluid">
	<div class="card">
	  <div class="card-body"> 
       <h5 class="card-title fw-semibold mb-4">Salary History</h5>
    	<div class="col-lg-12 d-flex align-items-stretch">
		    <div class="card w-100">
		      <div class="card-body">
		        <div class="table-responsive">
		          <table class="table text-nowrap mb-0 align-middle" id="myTable">
		            <thead class="text-dark">
		              <tr>
		              	<th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0" style="text-align: left;">Salary ID</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Date</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0" style="text-align: left;">Deduction</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0" style="text-align: left;">Salary</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Action</h6>
		                </th>
		              </tr>
		            </thead>
		            <tbody>
		            	<?php                         
                      $i = 0;
                      $users = $function->GetEmployeeSalary($user);
                      if ($users) {
                      foreach ($users as $user):
                      $salary_ID = $user['salary_ID'];
                      $date_given = $user['date_given'];
                      $total_deduction = $user['total_deduction'];
                      $total_salary = $user['total_salary'];
                      $i++;
                    ?>

		              <tr>
		              	<td class="border-bottom-0" style="text-align: left;">
		                  <label class="fw-semibold"><?=$i;?></label>
		                </td>	
		                <td class="border-bottom-0">
		                  <label><?=$date_given;?></label>                          
		                </td>
		                <td class="border-bottom-0" style="text-align: left;">
		                  <label>₱<?=$total_deduction;?></label>
		                </td>	
		                <td class="border-bottom-0" style="text-align: left;">
		                  <label>₱<?=$total_salary;?></label>
		                </td>	
		                <td class="border-bottom-0">
		                  <a href="salary_details.php?salary_ID=<?=$salary_ID;?>" class="badge btn bg-success rounded-3 fw-semibold">View</a>
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
          <a href="index.php" class="btn btn-primary">Exit</a>
        </div>
	  </div>
	</div>
</div>

   <?php
   	include 'footer.php';
   ?>