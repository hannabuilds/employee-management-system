<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Sign Out History</h5>
    	<div class="col-lg-12 d-flex align-items-stretch">
		    <div class="card w-100">
		      <div class="card-body">
		        <div class="table-responsive">
		          <table class="table text-nowrap mb-0 align-middle" id="myTable">
		            <thead class="text-dark">
		              <tr>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Date</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Device Name</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Sign Out</h6>
		                </th>
		              </tr>
		            </thead>
		            <tbody>

		              <tr>
		                <td class="border-bottom-0">
		                  <p><span id="date"></span></p>
                        <script>
                          var d = new Date();
                          document.getElementById("date").innerHTML = d.toLocaleDateString();
                        </script>                          
		                </td>
		                <td class="border-bottom-0">
		                  <h6 class="fw-normal">Device Name</h6>
		                </td>
		                <td class="border-bottom-0">
		                  <p><span id="Time-out"></span></p>
                        <script>
                         var to = new Date();
                         document.getElementById("Time-out").innerHTML = to.toLocaleTimeString();
                        </script>
		                </td>		              	
		              </tr>

		              <tr>
		                <td class="border-bottom-0">
		                  <p><span id="date2"></span></p>
                        <script>
                          var d2 = new Date();
                          document.getElementById("date2").innerHTML = d.toLocaleDateString();
                        </script>                          
		                </td>	
		                <td class="border-bottom-0">
		                  <h6 class="fw-normal">Device Name</h6>
		                </td>
		                <td class="border-bottom-0">
		                  <p><span id="Time-out2"></span></p>
                        <script>
                         var to2 = new Date();
                         document.getElementById("Time-out2").innerHTML = to.toLocaleTimeString();
                        </script>
		                </td>		              	
		              </tr>

		              <tr>
		                <td class="border-bottom-0">
		                  <p><span id="date3"></span></p>
                        <script>
                          var d3 = new Date();
                          document.getElementById("date3").innerHTML = d.toLocaleDateString();
                        </script>                          
		                </td>	
		                <td class="border-bottom-0">
		                  <h6 class="fw-normal">Device Name</h6>
		                </td>
		                <td class="border-bottom-0">
		                  <p><span id="Time-out3"></span></p>
                        <script>
                         var to3 = new Date();
                         document.getElementById("Time-out3").innerHTML = to.toLocaleTimeString();
                        </script>
		                </td>		              	
		              </tr>

		              <tr>
		                <td class="border-bottom-0">
		                  <p><span id="date4"></span></p>
                        <script>
                          var d4 = new Date();
                          document.getElementById("date4").innerHTML = d.toLocaleDateString();
                        </script>                          
		                </td>
		                <td class="border-bottom-0">
		                  <h6 class="fw-normal">Device Name</h6>
		                </td>	
		                <td class="border-bottom-0">
		                  <p><span id="Time-out4"></span></p>
                        <script>
                         var to4 = new Date();
                         document.getElementById("Time-out4").innerHTML = to.toLocaleTimeString();
                        </script>
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