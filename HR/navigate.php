<?php
include '../function.php';
include_once '../session.php';
Session::init();

$function = new Functions();

//---ADDING SECTION---//

	//Add User
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-user'])){
		
		$flag = $function->addUser($_POST);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new User has been added! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		
		header("Location: Add-user.php");
	}


//Add Bank Info
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['btn-add-bank'])) {
        // Retrieve form data
        $user_id = $_POST['user_id']; // Retrieve the user_id (employee ID) from the form
        $acc_name = $_POST['acc_name'];
        $acc_no = $_POST['acc_no'];
        $bank_name = $_POST['bank_name'];

        // Insert bank information into the database with the user_id as the foreign key
        $flag = $function->addBankInfo($_POST, $user_id);

        if ($flag == 1) {
            // Bank information added successfully
            Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> Bank information added successfully! </center> </div><br>");
        } else {
            // Failed to add bank information
            Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Failed to add bank information! </center> </div><br>");
        }

        // Redirect back to the page with the updated message
        header("Location: emp_bank.php?user_id=.$user_id");
        exit();
    }
}



//Add Attendance
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['btn-attendance'])) {
        // Retrieve form data
            $user_id = $_POST['user_id']; // Retrieve the user_id (employee ID) from the form
            $attend_date = $_POST['attend_date'];
            $attend_status = $_POST['attend_status'];
            $time_in = $_POST['time_in'];
            $in_status = $_POST['in_status'];
            $time_out = $_POST['time_out'];
            $out_status = $_POST['out_status'];
            $late_penalty = $_POST['late_penalty'];
            $ot_rate = $_POST['ot_rate'];

        // Insert attendance information into the database with the user_id as the foreign key
        $flag = $function->addAttendance($_POST, $user_id);

        if ($flag == 1) {
            // Attendance information added successfully
            Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> Attendance information added successfully! </center> </div><br>");
        } else {
            // Failed to add attendance information
            Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Failed to add attendance information! </center> </div><br>");
        }

        // Redirect back to the page with the updated message
        header("Location: emp_attendance.php?user_id=.$user_id");
        exit();
    }
}


//Add Salary
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['btn-add-salary'])) {
        // Retrieve form data
            $user_id = $_POST['user_id']; // Retrieve the user_id (employee ID) from the form
            $monthly_rate = $_POST['monthly_rate'];
            $overtime_rate = $_POST['overtime_rate'];
            $philhealth = $_POST['philhealth'];
            $SSS = $_POST['SSS'];
            $TIN_ID = $_POST['TIN_ID'];
            $penalties = $_POST['penalties'];
            $total_deduction = $_POST['total_deduction'];
            $total_salary = $_POST['total_salary'];
            $date_given = $_POST['date_given'];

        // Insert attendance information into the database with the user_id as the foreign key
        $flag = $function->addSalary($_POST, $user_id);

        if ($flag == 1) {
            // Attendance information added successfully
            Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> Saary has been added! </center> </div><br>");
        } else {
            // Failed to add attendance information
            Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Failed to add salary information! </center> </div><br>");
        }

        // Redirect back to the page with the updated message
        header("Location: emp_salary.php");
        exit();
    }
}




//Update Employee Info
  if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-update-employee'])){		
	$user_id = $_GET['user_id'];
		
	  $flag = $function->UpdateEmployeeInfo($_POST, $user_id);
		 if($flag==1){
			Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Employee has been updated! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: emp_update.php?user_id=".$user_id);
	}
	


//Update Bank Info
   if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-update-bank'])){		
		$user_id = $_GET['user_id'];
		
			$flag = $function->updateBankInfo($_POST, $user_id);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Bank Inormation has been updated! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: emp_bank.php?user_id=".$user_id);
	}









	//Delete Employee

	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-employee'])){		
	
		if (isset($_POST['emp_acc_ID'])) {
	        $user_id = $_POST['emp_acc_ID'];
	        $flag = $function->DeleteEmployee($user_id);
	        if ($flag == 1) {
	            $_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been deleted! </center> </div><br>";
	        } else {
	            $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
	        }
		    } else {
		        $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
		    }
		header("Location: users.php");
	} 

	

?>