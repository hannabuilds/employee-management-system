<?php
	include 'header.php';
?>

<div class="container-fluid">
	<div class="card">
	  <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Penalties</h5>
	    <div class="col-lg-12 d-flex align-items-stretch">
		    <div class="card w-100">
		      <div class="card-body">
		        <div class="table-responsive">
		          <table class="table text-nowrap mb-0 align-middle" id="myTable">
		          	<thead class="text-dark">
		              <tr>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Penalty ID</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Date</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Absent Penalty</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Late Penalty</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Total Penalty</h6>
		                </th>
		              </tr>
		            </thead>

		            <tbody>
		              <tr>
		                <td class="border-bottom-0">
		                  <h6 class="fw-semibold">01</h6>                          
		                </td>
		                <td class="border-bottom-0">
		                  <p><span id="penaltyDate"></span></p>
                        <script>
                          var d = new Date();
                          document.getElementById("penaltyDate").innerHTML = d.toLocaleDateString();
                        </script>  
		                </td>		
		                <td class="border-bottom-0">
		                  <h6>350</h6>
		                </td>
		                <td class="border-bottom-0">
		                  <h6>200</h6>
		                </td>	
		                <td class="border-bottom-0">
		                  <h6 class="fw-semibold">550</h6>
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