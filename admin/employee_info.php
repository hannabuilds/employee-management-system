<?php
  include 'header.php'; 
?>

<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">New Employee</h5>
              <div class="card">
                <img src="../assets/images/logos/luna.png" width="250" alt="" style="display: block; margin-left: auto; margin-right: auto;">
                <div class="card-body">
                  <?php
                  $msg = Session::get("msg");
                  if(isset($msg)){
                    echo $msg;
                    Session::set("msg", NULL);
                  }
                 ?> 
                  <form method="post" action="navigate.php">
                   <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-5 justify-content-center">
                       <label for="exampleInputEmail" class="form-label">Username</label>
                       <input type="email" class="form-control" id="exampleInputEmail" name="username" required>
                      </div>
                      <div class="col-md-2"></div>
                       <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword" name="password" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputLastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputLastname" name="last_name" required>
                      </div>
                      <div class="col-md-2"></div>
                       <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputAge" class="form-label">Age</label>
                        <input type="text" class="form-control" id="exampleInputAge" name="age" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputFirstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="exampleInputFirstname" name="first_name" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputProvince" class="form-label">Province Address</label>
                        <input type="text" class="form-control" id="exampleInputProvince" name="province_address" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputMiddlename" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="exampleInputMiddlename" name="middle_name" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputMunicipal" class="form-label">Municipal Address</label>
                        <input type="text" class="form-control" id="exampleInputMunicipal" name="municipal_address" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputSuffix" class="form-label">Suffix</label>
                        <input type="text" class="form-control" id="exampleInputSuffix" name="suffix_name" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputBarangay" class="form-label">Barangay Address</label>
                        <input type="text" class="form-control" id="exampleInputBarangay" name="barangay_address" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputPosition" class="form-label">Position</label>
                        <input type="text" class="form-control" id="exampleInputPosition" name="position" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputStreet" class="form-label">Street Address</label>
                        <input type="text" class="form-control" id="exampleInputStreet" name="street_address" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-2">
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputStanding" class="form-label">Standing</label>
                        <input type="text" class="form-control" id="exampleInputStanding" name="standing" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputBlock" class="form-label">Block No</label>
                        <input type="number" class="form-control" id="exampleInputBlock" name="block_no" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-2">
                     <div class="form-group col-md-5 justify-content-center">
                      <label for="exampleInputGender" class="form-label">Gender</label>
                        <div>
                         <select class="form-control" name="gender">
                          <option>Male</option>
                          <option>Female</option>
                         </select>
                        </div>
                       </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputPhone" class="form-label">Phone No</label>
                        <input type="number" class="form-control" id="exampleInputPhone" name="phone_no" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-2 mb-7">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputBirthdate" class="form-label">Birthdate</label>
                        <input type="date" class="form-control" id="exampleInputBirthdate" name="birth_date" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail" name="email" required>
                      </div>
                    </div>
                  </div> 

                  <div class="row">
                   <div class="col-md-12 d-flex justify-content-center w-60 py-7 fs-4 pt-1">
                    <button class="btn btn-primary rounded-2" type="submit" name="btn-add-employee">Create Account</button>
                  </div>
                </div> 
              </form>
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