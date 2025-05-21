<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">List of Manager</h5>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle" id="myTable">
                <thead class="text-dark">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Id</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Name</h6>
                    </th>
                  <!--  <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Position</h6>
                    </th> -->
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Department</h6>
                    </th>                   
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Action</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                    <td class="border-bottom-0">
                        <span class="fw-normal">Juan Cruz</span>                          
                    </td>
                  <!--  <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Admin</p>
                    </td> -->
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Food and Beverage</p>
                    </td>                   
                    <td class="border-bottom-0">
                      <a href="signIn_history.php" class="badge btn bg-info rounded-3 fw-semibold">Sign in</a>
                      <a href="signOut_history.php" class="badge btn bg-info rounded-3 fw-semibold">Sign out</a>
                    </td>
                  </tr>

                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
                    <td class="border-bottom-0">                    
                        <span class="fw-normal">Pedro Laura</span>                          
                    </td>
                  <!--  <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Staff</p>
                    </td>  -->               
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Housekeeping</p>
                    </td>       
                    <td class="border-bottom-0">
                      <a href="signIn_history.php" class="badge btn bg-info rounded-3 fw-semibold">Sign in</a>
                      <a href="signOut_history.php" class="badge btn bg-info rounded-3 fw-semibold">Sign out</a>
                    </td>
                  </tr>

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