<?php
  include 'header.php'; 
  $user_id = $_GET['user_id'];
  $user = $function->GetEmployeeAcc($user_id);
?>

<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Personal Information</h5>
              <div class="card">
                <?php
                $msg = Session::get("msg");
                if(isset($msg)){
                echo $msg;
                Session::set("msg", NULL);
              }
               ?>
                <div class="card-body">
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
                  <form method="post" action="navigate.php?user_id=<?=$user_id;?>">
                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputLastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputLastname" name="last_name" value="<?=($user_lastname)?$user_lastname:'';?>" required>
                      </div>
                      <div class="col-md-2"></div>
                       <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputAge" class="form-label">Age</label>
                        <input type="number" class="form-control" id="exampleInputAge" name="age" 
                        value="<?=($user_age)?$user_age:'';?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputFirstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="exampleInputFirstname" name="first_name" value="<?=($user_firstname)?$user_firstname:'';?>" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputProvince" class="form-label">Province Address</label>
                        <input type="text" class="form-control" id="exampleInputProvince" name="province_address" value="<?=($user_province)?$user_province:'';?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputMiddlename" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="exampleInputMiddlename" name="middle_name" value="<?=($user_middlename)?$user_middlename:'';?>" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputMunicipal" class="form-label">Municipal Address</label>
                        <input type="text" class="form-control" id="exampleInputMunicipal" name="municipal_address" value="<?=($user_municipal)?$user_municipal:'';?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputSuffix" class="form-label">Suffix</label>
                        <input type="text" class="form-control" id="exampleInputSuffix" name="suffix_name" value="<?=($user_suffixname)?$user_suffixname:'';?>">
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputBarangay" class="form-label">Barangay Address</label>
                        <input type="text" class="form-control" id="exampleInputBarangay" name="barangay_address" value="<?=($user_barangay)?$user_barangay:'';?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputPosition" class="form-label">Position</label>
                        <div>
                         <select class="form-control" name="position">
                          <option <?=($user_position == 'Receptionist') ? 'selected' : ''?>>Receptionist</option>
                          <option <?=($user_position == 'Manager') ? 'selected' : ''?>>Manager</option>
                          <option <?=($user_position == 'Housekeeper') ? 'selected' : ''?>>Housekeeper</option>
                          <option <?=($user_position == 'Waiter') ? 'selected' : ''?>>Waiter</option>
                          <option <?=($user_position == 'Chef') ? 'selected' : ''?>>Chef</option>
                          <option <?=($user_position == 'Maintenance') ? 'selected' : ''?>>Maintenance</option>
                          <option <?=($user_position == 'Human Resource') ? 'selected' : ''?>>Human Resource</option>
                          <option <?=($user_position == 'Administrator') ? 'selected' : ''?>>Administrator</option>
                          <option <?=($user_position == 'Security Guard') ? 'selected' : ''?>>Security Guard</option>
                         </select>
                    </div>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputStreet" class="form-label">Street Address</label>
                        <input type="text" class="form-control" id="exampleInputStreet" name="street_address" value="<?=($user_street)?$user_street:'';?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-2">
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputStanding" class="form-label">Standing</label>
                        <input type="text" class="form-control" id="exampleInputStanding" name="standing" value="<?=($user_standing)?$user_standing:'';?>" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputBlock" class="form-label">Block No</label>
                        <input type="number" class="form-control" id="exampleInputBlock" name="block_no" value="<?=($user_block)?$user_block:'';?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-2">
                     <div class="form-group col-md-5 justify-content-center">
                      <label for="exampleInputGender" class="form-label">Gender</label>
                        <div>
                         <select class="form-control" name="gender">
                          <option <?=($user_gender == 'Male') ? 'selected' : ''?>>Male</option>
                          <option <?=($user_gender == 'Female') ? 'selected' : ''?>>Female</option>
                         </select>
                        </div>
                       </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputPhone" class="form-label">Phone No</label>
                        <input type="number" class="form-control" id="exampleInputPhone" name="phone_no" value="<?=($user_phone)?$user_phone:'';?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-2 mb-4">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputBirthdate" class="form-label">Birthdate</label>
                        <input type="date" class="form-control" id="exampleInputBirthdate" name="birth_date" value="<?=($user_birthdate)?$user_birthdate:'';?>" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail" name="email"  value="<?=($user_email)?$user_email:'';?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-2 mb-7">
                      <div class="col-md-3"></div>
                      <div class="form-group col-md-6 justify-content-center">  
                        <label for="exampleInputEmail" class="form-label">Rate Per Day</label>
                        <input type="number" class="form-control" id="exampleInputRate" name="rate" value="<?=($user_rate)?$user_rate:'';?>"required>
                      </div>
                      <div class="col-md-3"></div>
                    </div>
                  </div> 

                <div class="row">
                  <div class="col-md-12 d-flex justify-content-center w-60 py-7 fs-4 pt-1">
                    <button type="submit" class="btn btn-primary" name="btn-update-employee">Save</button>
                  </div>
                </div>  
             </form>
             <?php
              }
             ?>
            </div>
           </div>
            <div class="align-items-right w-40 py-9 fs-2 pt-2">  
              <a href="users.php" class="btn btn-primary">Exit</a>
           </div>
          </div>
         </div>
        </div>
       </div> 

<?php 
  include 'footer.php';
?>