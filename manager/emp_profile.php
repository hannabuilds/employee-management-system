<?php
  include 'header.php';
  $user_id = $_GET['user_id'];
  $user = $function->GetEmployeeAcc($user_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-10"><h5 class="card-title fw-semibold mb-4">Personal Information</h5></div>
     <?php
       $msg = Session::get("msg");
       if(isset($msg)){
       echo $msg;
       Session::set("msg", NULL);
        }
     ?>
    <div class="col-2"><h6 class="fw-semibold mb-4">Employee ID: <?=$user_id;?></h6></div>
    </div>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table text-nowrap mb-0">
                 <?php
                    if($user)
                   { 
                     $user_id = $user->emp_acc_ID;
                     $user_lastname = $user->last_name;
                     $user_firstname = $user->first_name;
                     $user_middlename = $user->middle_name;
                     $user_suffixname = $user->suffix_name;
                     $user_position = $user->position;
                     $user_standing = $user->standing;
                     $user_province = $user->province_address;
                     $user_municipal = $user->municipal_address;
                     $user_barangay = $user->barangay_address;
                     $user_street = $user->street_address;
                     $user_block = $user->block_no;
                     $user_phone = $user->phone_no;
                     $user_birthdate = $user->birth_date;
                     $user_age = $user->age;
                     $user_gender = $user->gender;
                     $user_email = $user->email;
                     $user_rate = $user->rate;
                  ?> 
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
      <div class="col-3 w-40 py-9 fs-2 pt-2"> 
      <a href="users.php" class="btn btn-primary">Exit</a>
     </div>
    </div>
  </div>
</div>

<?php 
  include 'footer.php';
?>