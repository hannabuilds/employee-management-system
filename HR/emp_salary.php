<?php
  include 'header.php';
  $user_id = $_GET['user_id'];
  $user = $function->GetEmployeeAcc($user_id); 
?>

<div class="container-fluid">
        <div class="container-fluid">
          <?php
            $msg = Session::get("msg");
            if(isset($msg)){
            echo $msg;
            Session::set("msg", NULL);
            }
           ?>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Salary</h5>
              <table class="table text-nowrap mb-4">
              <?php
                    if($user)
                   { 
                     $user_id = $user->emp_acc_ID;
                     $user_lastname = $user->last_name;
                     $user_firstname = $user->first_name;                 
                ?>
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Employee ID:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_id;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Name:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user->first_name. " " .$user->last_name;?></label>
                    </td>                   
                  </tr>
              <?php
                 }
               ?>
            </table>
            
              <div class="card p">
                <div class="card-body">
                <form action="navigate.php?user_id=<?=$user_id;?>" method="post">
                  <input type="hidden" name="user_id" value="<?= $user_id ?>">

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputRate" class="form-label">Rate</label>
                        <input type="number" class="form-control" id="exampleInputRate" name="monthly_rate" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputOvertime" class="form-label">Overtime Rate</label>
                        <input type="number" class="form-control" id="exampleInputOvertime" name="overtime_rate" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputPhilHealth" class="form-label">PhilHealth</label>
                        <input type="number" class="form-control" id="exampleInputPhilHealth" name="philhealth" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputPag-ibig" class="form-label">Pag-ibig</label>
                        <input type="number" class="form-control" id="exampleInputPag-ibig" name="pagibig" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1 py-7">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputTIN" class="form-label">TIN ID</label>
                        <input type="number" class="form-control" id="exampleInputTIN" name="TIN_ID" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputSSS" class="form-label">SSS</label>
                        <input type="number" class="form-control" id="exampleInputSSS" name="SSS" required>
                      </div>
                    </div>
                  </div>

                   <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1 py-7">
                      <div class="col-md-3"></div>
                      <div class="form-group col-md-6 justify-content-center">  
                        <label for="exampleInputPenalties" class="form-label">Penalties</label>
                        <input type="number" class="form-control" id="exampleInputPenalties" name="penalties" required>
                      </div>
                      <div class="col-md-3"></div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-2 py-7">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputDeductiom" class="form-label">Total Deduction</label>
                        <input type="number" class="form-control" id="exampleInputDeductiom" name="total_deduction" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputSalary" class="form-label">Total Salary</label>
                        <input type="number" class="form-control" id="exampleInputSalary" name="total_salary" required>
                      </div>
                    </div>
                  </div>

                <div class="row">
                  <div class="col-md-12 d-flex justify-content-center w-60 py-7 fs-4 pt-1">
                    <button type="submit" name="btn-add-salary" class="btn btn-primary">Save</button>
                  </div>
                </div> 
             </form>
            </div>
           </div>
           <div class="align-items-right w-40 py-9 fs-2 pt-2">  
              <a href="users_salary.php" class="btn btn-primary">Exit</a>
           </div>
           </div>
          </div>
         </div>
        </div>
       </div> 

<?php 
  include 'footer.php';
?>