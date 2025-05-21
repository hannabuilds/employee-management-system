<?php
  include 'header.php';
?>


<div class="row">
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100 mb-4 py-9">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                  <img src="../assets/images/logos/luna.png" width="250" alt="" style="display: block; margin-left: auto; margin-right: auto;">
                 <?php
                  $msg = Session::get("msg");
                  if(isset($msg)){
                    echo $msg;
                    Session::set("msg", NULL);
                  }
                 ?>
                <p><strong>New Admin Account</strong></p>
                <form method="post" action="navigate.php">
                  <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" name="name" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputEmail" class="form-label">User ID</label>
                    <input type="text" class="form-control" id="exampleInputEmail" name="username" required>
                  </div>
                  <div class="mb-5">
                    <label for="exampleInputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" name="password"required>
                  </div>
                  <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit" name="btn-add-admin">Create Account</button>
                </form>
              </div>
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