<?php
include '../function.php';
include_once 'session.php';
Session::init();

$function = new Functions();

//---ADDING SECTION---//

	//Add Admin
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-admin'])){

    $flag = $function->addAdmin($_POST);

    if($flag == 1){
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Admin has been added! </center> </div><br>");
    } elseif ($flag == -1) {
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Username already exists! </center> </div><br>");
    } else {
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>");
    }

    header("Location: admin_acc.php");
}



   //Add HR
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-HR'])){

    $flag = $function->addHR($_POST);
    
    if($flag == 1){
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new HR has been added! </center> </div><br>");
    } elseif ($flag == -1) {
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Username already exists! </center> </div><br>");
    } else {
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>");
    }

    header("Location: HR_acc.php");
}

//Add Manager
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-manager'])){

    $flag = $function->addManager($_POST);
    
    if($flag == 1){
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Manager has been added! </center> </div><br>");
    } elseif ($flag == -1) {
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Username already exists! </center> </div><br>");
    } else {
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>");
    }

    header("Location: manager_acc.php");
}


//Add Employee
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-employee'])){

    $flag = $function->addEmployee($_POST);
    
    if($flag == 1){
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new User has been added! </center> </div><br>");
    } elseif ($flag == -1) {
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Username already exists! </center> </div><br>");
    } else {
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i> Something went wrong! </center> </div><br>");
    }

    header("Location: employee_acc.php");
}




//Edit Admin
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-admin'])){		
		$user_id = $_GET['user_id'];
		
			$flag = $function->UpdateAdmin($_POST, $user_id);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been changed! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: edit_admin.php?user_id=".$user_id);
	}

//Edit HR
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-hr'])){		
		$user_id = $_GET['user_id'];
		
			$flag = $function->UpdateHR($_POST, $user_id);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been changed! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: edit_HR.php?user_id=".$user_id);
	}

//Edit Manager
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-manager'])){		
		$user_id = $_GET['user_id'];
		
			$flag = $function->UpdateManager($_POST, $user_id);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been changed! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: edit_manager.php?user_id=".$user_id);
	}

//Edit Employee
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-employee'])){		
		$user_id = $_GET['user_id'];
		
			$flag = $function->UpdateEmployee($_POST, $user_id);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been changed! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: edit_employee.php?user_id=".$user_id);
	}





//Delete Admin
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-admin'])){		
	
		if (isset($_POST['admin_ID'])) {
	        $user_id = $_POST['admin_ID'];
	        $flag = $function->DeleteAdmin($user_id);
	        if ($flag == 1) {
	            $_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been deleted! </center> </div><br>";
	        } else {
	            $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
	        }
		    } else {
		        $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
		    }
		header("Location: users3.php");
	}

//Delete HR
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-hr'])){		
	
		if (isset($_POST['HR_ID'])) {
	        $user_id = $_POST['HR_ID'];
	        $flag = $function->DeleteHR($user_id);
	        if ($flag == 1) {
	            $_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been deleted! </center> </div><br>";
	        } else {
	            $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
	        }
		    } else {
		        $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
		    }
		header("Location: users1.php");
	}

//Delete Manager
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-manager'])){		
	
		if (isset($_POST['manager_ID'])) {
	        $user_id = $_POST['manager_ID'];
	        $flag = $function->DeleteManager($user_id);
	        if ($flag == 1) {
	            $_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been deleted! </center> </div><br>";
	        } else {
	            $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
	        }
		    } else {
		        $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
		    }
		header("Location: users2.php");
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









	//Edit User
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-user'])){		
		$user_id = $_GET['user_id'];
		
			$flag = $function->UpdateUser($_POST, $user_id);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been changed! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: Edit-user.php?user_id=".$user_id);
	}

	//Delete User
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-user'])){		
	
		if (isset($_POST['id'])) {
	        $user_id = $_POST['id'];
	        $flag = $function->DeleteUser($user_id);
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