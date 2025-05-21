<?php
  include 'header.php';
  $user_id = $_GET['user_id']; 
  $user = $function->GetEmployeeAcc($user_id);
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
              <h5 class="card-title fw-semibold mb-4">Attendance</h5>
              <div class="card p">
                <div class="card-body">
                  <form action="navigate.php?user_id=<?=$user_id;?>" method="post">
                   <input type="hidden" name="user_id" value="<?= $user_id ?>">
                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-5 justify-content-center">
                        <label for="exampleInputDate" class="form-label">Date</label>
                        <input type="date" class="form-control" id="exampleInputDate" name="attend_date" required>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="form-group col-md-5 justify-content-center">  
                        <label for="exampleInputStatus" class="form-label">Status</label>
                        <div>
                         <select class="form-control" name="attend_status" id="exampleInputStatus" required>
                          <option>Duty</option>
                          <option>Absent</option>
                         </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-3 justify-content-center py-7">
                        <label for="exampleInputTimein" class="form-label">Time in</label>
                        <div>
                         <select class="form-control" name="time_in" id="exampleInputTimein" required>
                          <option>-</option>
                          <option>7:30 AM</option>
                          <option>8:00 AM</option>
                          <option>8:30 AM</option>
                          <option>9:00 AM</option>
                          <option>9:30 AM</option>
                          <option>10:00 AM</option>
                          <option>10:30 AM</option>
                          <option>11:00 AM</option>
                          <option>11:30 AM</option>
                         </select>
                        </div>
                      </div>
                      <div class="col-1"></div>
                      <div class="form-group col-md-3 justify-content-center">  
                        <label for="exampleInputInStatus" class="form-label">In Status</label>
                        <div>
                         <select class="form-control" id="exampleInputInStatus" name="in_status" required>
                          <option>- </option>
                          <option>On Time</option>
                          <option>Late</option>
                         </select>
                        </div>
                      </div>
                      <div class="col-1"></div>
                      <div class="form-group col-md-3 justify-content-center">
                        <label for="exampleInputInPenalty" class="form-label">Late Penalty</label>
                        <input type="number" class="form-control" id="exampleInputInPenalty" name="late_penalty" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                      <div class="form-group col-md-3 justify-content-center py-7">
                        <label for="exampleInputTimeout" class="form-label">Time out</label>
                        <div>
                         <select class="form-control" name="time_out" id="exampleInputTimein" required>
                          <option>-</option>
                          <option>5:00 PM</option>
                          <option>5:30 PM</option>
                          <option>6:00 PM</option>
                          <option>6:30 PM</option>
                          <option>7:00 PM</option>
                          <option>7:30 PM</option>
                          <option>8:00 PM</option>
                          <option>8:30 PM</option>
                          <option>9:00 PM</option>
                          <option>9:30 PM</option>
                          <option>10:00 PM</option>
                          <option>10:30 PM</option>
                          <option>11:00 PM</option>
                          <option>11:30 PM</option>
                         </select>
                        </div>
                      </div>
                      <div class="col-md-1"></div>
                      <div class="form-group col-md-3 justify-content-center">  
                        <label for="exampleInputOutStatus" class="form-label">Out Status</label>
                        <div>
                         <select class="form-control" id="exampleInputOutStatus" name="out_status" required>
                          <option>- </option>
                          <option>On Time</option>
                          <option>Over Time</option>
                         </select>
                        </div>
                      </div>
                      <div class="col-md-1"></div>
                      <div class="form-group col-md-3 justify-content-center">
                        <label for="exampleInputOTRate" class="form-label">Overtime Rate</label>
                        <input type="number" class="form-control" id="exampleInputOTRate" name="ot_rate" value="05:00" required>
                      </div>
                    </div>
                  </div>
                  
                 <div class="row">
                  <div class="col-md-12 d-flex justify-content-center w-60 py-7 fs-4 pt-4">
                    <button type="submit" name="btn-attendance" class="btn btn-primary">Save</button>
                  </div>
                 </div>
             </form>
            </div>
           </div>
           <div class="align-items-right w-40 py-9 fs-2 pt-2">  
             <a href="users_record.php" class="btn btn-primary">Exit</a>
           </div>
           </div>
          </div>
         </div>
        </div>
       </div> 

<?php 
  include 'footer.php';
?>

