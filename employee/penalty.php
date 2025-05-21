<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Penalties</h5>
      <p>Date: <span id="datetime"></span></p>
      <script>
        var dt = new Date();
        document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
      </script>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold">Penalty ID:</h6>                          
                    </td>
                    <td class="border-bottom-0">
                      <h6>01</h6>
                    </td>                   
                  </tr>

                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold">Absent Penalty:</h6>                          
                    </td>
                    <td class="border-bottom-0">
                      <h6>50</h6>
                    </td>                   
                  </tr>

                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold">Late Penalty:</h6>                          
                    </td>
                    <td class="border-bottom-0">
                      <h6>50</h6>
                    </td>                   
                  </tr>

                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold">Total Penalty:</h6>                          
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold">100</h6>
                    </td>                   
                  </tr>
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