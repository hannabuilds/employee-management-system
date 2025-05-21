<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">List of Employee</h5>
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
                      <h6 class="fw-semibold mb-0" style="text-align: left;">Employee ID</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Name</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Position</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Standing</h6>
                    </th>                   
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Action</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                   <?php                         
                      $i = 0;
                      $users = $function->GetAllEmployee();
                      if ($users) {
                      foreach ($users as $user):
                      $user_id = $user['emp_acc_ID'];
                      $emp_fname = $user['first_name'];
                      $emp_lname = $user['last_name'];
                      $emp_position = $user['position'];
                      $emp_standing = $user['standing'];
                      $i++;
                    ?>
                   <tr>
                    <td style="text-align: left;"><label class="fw-semibold"><?=$i;?></label></td>
                    <td style="text-align: left;"><label><?=$user_id;?></label></td>
                    <td><label><?=$emp_fname. " " .$emp_lname;?></label></td>
                    <td><label><?=$emp_position;?></label></td>
                    <td><label><?=$emp_standing;?></label></td>                    
                    
                    <td class="border-bottom-0">
                      <form method="post" action="navigate.php">
                      <a href="salary_view.php?user_id=<?=$user_id;?>" class="badge btn bg-warning rounded-3 fw-semibold">Salary</a>
                    </form>
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
    </div>
  </div>
</div>

<?php 
  include 'footer.php';
?>