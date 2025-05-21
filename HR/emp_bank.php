<?php
  include 'header.php'; 
  $user_id = $_GET['user_id'];
  $user = $function->GetEmployeeAcc($user_id);
  $bank_info = $function->GetEmployeeBank($user_id);
?>

<div class="container-fluid">
   <div class="container-fluid">
     <div class="card">
        <?php
          $msg = Session::get("msg");
          if(isset($msg)){
          echo $msg;
          Session::set("msg", NULL);
            }
        ?> 
         <div class="card-body">
            <?php if($bank_info): ?>
                  <!-- Display the current bank information -->
              <p>Current Account Name: <?= $bank_info->acc_name ?></p>
              <p>Current Account Number: <?= $bank_info->acc_no ?></p>
              <p>Current Bank Name: <?= $bank_info->bank_name ?></p>
            
                <?php
                 if($user)
                 { 
                     $bank_id = $bank_info->bank_ID;
                     $bank_accName = $bank_info->acc_name;
                     $bank_accNo = $bank_info->acc_no;
                     $bank_bname = $bank_info->bank_name; ?>

                            <!-- Update Bank Information Form -->
                <form action="navigate.php?user_id=<?=$user_id;?>" method="post">
                  <input type="hidden" name="user_id" value="<?= $user_id ?>">
                  <input type="hidden" name="bank_id" value="<?= $bank_info->bank_ID ?>"> <!-- Include bank_id for update -->
                    <div class="row">
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputAccName" class="form-label">Account Name</label>
                          <input type="text" class="form-control" id="exampleInputAccName" name="acc_name" value="<?=($bank_accName)?$bank_accName:'';?>" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">
                         <label for="exampleInputAccNum" class="form-label">Account Number</label>
                         <input type="text" class="form-control" id="exampleInputAccNum" name="acc_no" value="<?=($bank_accNo)?$bank_accNo:'';?>" required>
                      </div>
                    </div>

                     <div class="row">
                       <div class="col-md-3"></div>
                       <div class="form-group col-md-6 justify-content-center py-7">  
                         <label for="exampleInputBankName" class="form-label">Bank Name</label>
                         <input type="text" class="form-control" id="exampleInputBankName" name="bank_name" value="<?=($bank_bname)?$bank_bname:'';?>" required>
                       </div>
                       <div class="col-md-3"></div>
                      </div>

                      <div class="row">
                        <div class="col-md-12 d-flex justify-content-center w-60 py-7 fs-4 pt-1">
                          <button type="submit" name="btn-update-bank" class="btn btn-primary">Update Bank Information</button>
                        </div>
                      </div>  
                    </form>
                    <?php
                      }
                    ?>


                    <?php else: ?>
                            <!-- Add Bank Information Form -->
                    <form action="navigate.php" method="post">
                     <input type="hidden" name="user_id" value="<?= $user_id ?>">
                      <div class="row">
                        <div class="form-group col-md-5 justify-content-center">  
                          <label for="exampleInputAccName" class="form-label">Account Name</label>
                          <input type="text" class="form-control" id="exampleInputAccName" name="acc_name" required>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="form-group col-md-5 justify-content-center">
                          <label for="exampleInputAccNum" class="form-label">Account Number</label>
                          <input type="text" class="form-control" id="exampleInputAccNum" name="acc_no" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-6 justify-content-center py-7">  
                          <label for="exampleInputBankName" class="form-label">Bank Name</label>
                          <input type="text" class="form-control" id="exampleInputBankName" name="bank_name" required>
                        </div>
                        <div class="col-md-3"></div>
                      </div>

                      <div class="row">
                        <div class="col-md-12 d-flex justify-content-center w-60 py-7 fs-4 pt-1">
                          <button type="submit" name="btn-add-bank" class="btn btn-primary">Add Bank Information</button>
                        </div>
                      </div>  
                    </form>
                        <?php endif; ?>
                </div>
                </div>
                <div class="align-items-right w-40 py-9 fs-2 pt-2">  
                    <a href="users_bank.php" class="btn btn-primary">Exit</a>
                </div>
            </div>
        </div>
    </div>
</div> 

<?php 
  include 'footer.php';
?>