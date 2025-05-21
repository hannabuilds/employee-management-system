<?php
	include 'header.php';
?>

<div class="container-fluid">
	<div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
          <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">Report</h5>
              </div>
              <div>
                <select class="form-select">
                  <option value="1">March 2023</option>
                  <option value="2">April 2023</option>
                  <option value="3">May 2023</option>
                  <option value="4">June 2023</option>
                </select>
              </div>
            </div>
            <div id="chart"></div>
             <div class="row">
          <div class="col-10"></div>
          <div class="col-2">
          <button type="submit" class="btn btn-primary">Export</button>
          </div>
          </div>
          </div>
        </div>
      </div>
</div>


   <?php
   	include 'footer.php';
   ?>