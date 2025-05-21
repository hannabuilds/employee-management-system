<?php
  include 'header.php';
  $user = $_SESSION['username'];
  $user_bank = $_SESSION['emp_acc_ID'];
  $employee = $function->GetEmployeeByUsername($user);
  $bank = $function->GetEmployeeBank($user_bank);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-10"><h5 class="card-title fw-semibold mb-4">Personal Information</h5></div>
    </div>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table text-nowrap mb-0">
                <?php
                    if($employee)
                   { 
                     $user_id = $employee->emp_acc_ID;
                     $user_lastname = $employee->last_name;
                     $user_firstname = $employee->first_name;
                     $user_middlename = $employee->middle_name;
                     $user_suffixname = $employee->suffix_name;
                     $user_position = $employee->position;
                     $user_standing = $employee->standing;
                     $user_province = $employee->province_address;
                     $user_municipal = $employee->municipal_address;
                     $user_barangay = $employee->barangay_address;
                     $user_street = $employee->street_address;
                     $user_block = $employee->block_no;
                     $user_phone = $employee->phone_no;
                     $user_birthdate = $employee->birth_date;
                     $user_age = $employee->age;
                     $user_gender = $employee->gender;
                     $user_email = $employee->email;
                     $user_rate = $employee->rate;
                  ?> 
                <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Employee ID:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_id;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Position:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_position;?></label>
                    </td>                   
                  </tr>
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Last Name:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_lastname;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Province Address:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_province;?></label>
                    </td>                   
                  </tr>
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">First Name:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_firstname;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Municipal Address:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_municipal;?></label>
                    </td>                   
                  </tr>
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Middle Name:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_middlename;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Barangay Address:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_barangay;?></label>
                    </td>                   
                  </tr>
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Suffix:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_suffixname;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Street Address:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_street;?></label>
                    </td>                   
                  </tr>
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Gender:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_gender;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Block No:</h6>
                    </th>
                    <td class="border-bottom-0">
                     <label><?=$user_block;?></label>
                    </td>                   
                  </tr>
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Birthdate:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_birthdate;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Phone No:</h6>
                    </th>
                    <td class="border-bottom-0">
                     <label><?=$user_phone;?></label>
                    </td>                   
                  </tr>
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Age:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_age;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Email:</h6>
                    </th>
                    <td class="border-bottom-0">
                     <label><?=$user_email;?></label> 
                    </td>                   
                  </tr>
                   <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Standing:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_standing;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Rate:</h6>
                    </th>
                    <td class="border-bottom-0">
                     <label><?=$user_rate;?></label> 
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
     <div class="card-body">
      <h5 class="card-title fw-semibold mb-0">Bank Account Information</h5>
     </div>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table text-nowrap mb-0">
                 <?php
                    if($bank)
                   { 
                     $user_accName = $bank->acc_name;
                     $user_accNo = $bank->acc_no;
                     $user_bankName = $bank->bank_name;
                  ?>
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Account Name:</h6>
                    </th>
                    <td class="border-bottom-0">
                     <label><?=$user_accName;?></label>
                    </td>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Account No:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_accNo;?></label>
                    </td>                   
                  </tr>
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Bank Name:</h6>
                    </th>
                    <td class="border-bottom-0">
                      <label><?=$user_bankName;?></label>
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
      <div class="col-3 w-40 py-9 fs-2 pt-2"> 
      <a href="index.php" class="btn btn-primary">Exit</a>
     </div>
    </div>
  </div>
</div>

<?php 
  include 'footer.php';
?>