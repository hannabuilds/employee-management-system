<?php
include 'conn.php';

Class Functions
{
	private $db;
	public function __construct(){
		$this->db = new conn(); 
}


//Create Admin
public function addAdmin($data){		

    // Check if the username already exists
    $sql_check_username = "SELECT COUNT(*) AS count FROM tbl_admin WHERE username = :username";
    $stmt_check_username = $this->db->conn->prepare($sql_check_username);
    $stmt_check_username->execute([':username' => $data['username']]);
    $result_username = $stmt_check_username->fetch(PDO::FETCH_ASSOC);

    if ($result_username['count'] > 0) {
        // Username already exists
        return -1;
    }

    // Hash the password
    $hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);

    // Insert the admin account
    $sql = "INSERT INTO tbl_admin (name, username, password) VALUES (:name, :username, :password)";
    $stmt = $this->db->conn->prepare($sql);
    $r = $stmt->execute([
        ':name' => $data['name'],
        ':username' => $data['username'],
        ':password' => $hashed_password
    ]);
    
    if($r){
        // Success
        return 1;
    } else {
        // Something went wrong with the query
        return 0;
    }
}


//Read All Admin
	public function GetAllAdmin(){
		$sql = 'SELECT * FROM tbl_admin';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}


//Count of Admin Account
public function TotalAdminAccounts() {
        // SQL query to count the total number of employee accounts
        $sql = "SELECT COUNT(*) AS total FROM tbl_admin";
        
        $stmt = $this->db->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Return the total count
        return $result['total'];
    }




//Read Only Admin
	public function GetAdminInfo($id){
		$sql = 'SELECT * FROM tbl_admin WHERE admin_ID=:id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':id' => $id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

//Update Admin
	public function UpdateAdmin($data, $id){
      
      if(isset($data['password'])) {
      	$hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);
      }

		$sql = 'UPDATE tbl_admin SET name=:name, username=:username, password=:password WHERE admin_ID = :id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':name' => $data['name'],
							  ':username' => $data['username'],
							  ':password' => $hashed_password,
							  ':id' => $id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}


//Delete Admin
	public function DeleteAdmin($id){
		$sql = 'DELETE FROM tbl_admin WHERE admin_ID=:id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':id' => $id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}



//Create HR
   public function addHR($data){		

   	// Check if the username already exists
    $sql_check_username = "SELECT COUNT(*) AS count FROM tbl_hr WHERE username = :username";
    $stmt_check_username = $this->db->conn->prepare($sql_check_username);
    $stmt_check_username->execute([':username' => $data['username']]);
    $result_username = $stmt_check_username->fetch(PDO::FETCH_ASSOC);

    if ($result_username['count'] > 0) {
        // Username already exists
        return -1;
    }

    // Hash the password
    $hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);

    // Insert the admin account
    $sql = "INSERT INTO tbl_hr (name, username, password, task) VALUES (:name, :username, :password, :task)";
    $stmt = $this->db->conn->prepare($sql);
    $r = $stmt->execute([
        ':name' => $data['name'],
        ':username' => $data['username'],
        ':task' => $data['task'],
        ':password' => $hashed_password
    ]);
    
    if($r){
        // Success
        return 1;
    } else {
        // Something went wrong with the query
        return 0;
    }				
}

//Read All HR
	public function GetAllHR(){
		$sql = 'SELECT * FROM tbl_hr';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
}


//Count of HR Account
public function TotalHRAccounts() {
        // SQL query to count the total number of employee accounts
        $sql = "SELECT COUNT(*) AS total FROM tbl_hr";
        
        $stmt = $this->db->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Return the total count
        return $result['total'];
    }


//Read Only HR
	public function GetHRInfo($id){
		$sql = 'SELECT * FROM tbl_hr WHERE HR_ID=:id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':id' => $id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

//Update HR
	public function UpdateHR($data, $id){
      if(isset($data['password'])) {
      	$hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);
      }

		$sql = 'UPDATE tbl_hr SET name=:name, username=:username, password=:password, task=:task WHERE HR_ID = :id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':name' => $data['name'],
							  ':username' => $data['username'],
							  ':password' => $hashed_password,
							  ':task' => $data['task'],
							  ':id' => $id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}

//Delete HR
	public function DeleteHR($id){
		$sql = 'DELETE FROM tbl_hr WHERE HR_ID=:id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':id' => $id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
  }




//Create Manager
   public function addManager($data){		
   
   	// Check if the username already exists
    $sql_check_username = "SELECT COUNT(*) AS count FROM tbl_manager WHERE username = :username";
    $stmt_check_username = $this->db->conn->prepare($sql_check_username);
    $stmt_check_username->execute([':username' => $data['username']]);
    $result_username = $stmt_check_username->fetch(PDO::FETCH_ASSOC);

    if ($result_username['count'] > 0) {
        // Username already exists
        return -1;
    }

    // Hash the password
    $hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);

    // Insert the admin account
    $sql = "INSERT INTO tbl_manager (name, username, password, dept) VALUES (:name, :username, :password, :dept)";
    $stmt = $this->db->conn->prepare($sql);
    $r = $stmt->execute([
        ':name' => $data['name'],
        ':username' => $data['username'],
        ':dept' => $data['dept'],
        ':password' => $hashed_password
    ]);
    
    if($r){
        // Success
        return 1;
    } else {
        // Something went wrong with the query
        return 0;
    }	
							
}


//Read All Manager
	public function GetAllManager(){
		$sql = 'SELECT * FROM tbl_manager';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
}


//Count of Manager Account
public function TotalManagerAccounts() {
        // SQL query to count the total number of employee accounts
        $sql = "SELECT COUNT(*) AS total FROM tbl_manager";
        
        $stmt = $this->db->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Return the total count
        return $result['total'];
    }


//Read Only Manager
	public function GetManagerInfo($id){
		$sql = 'SELECT * FROM tbl_manager WHERE manager_ID=:id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':id' => $id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

//Update Manager
	public function UpdateManager($data, $id){

		if(isset($data['password'])) {
      	$hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);
      }

		$sql = 'UPDATE tbl_manager SET name=:name, username=:username, password=:password, dept=:dept WHERE manager_ID = :id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':name' => $data['name'],
							  ':username' => $data['username'],
							  ':password' => $hashed_password,
							  ':dept' => $data['dept'],
							  ':id' => $id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}

//Delete Manager
	public function DeleteManager($id){
		$sql = 'DELETE FROM tbl_manager WHERE manager_ID=:id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':id' => $id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
  }





//Create Employee
   public function addEmployee($data){		

   // Check if the username already exists
    $sql_check_username = "SELECT COUNT(*) AS count FROM tbl_employee_account WHERE username = :username";
    $stmt_check_username = $this->db->conn->prepare($sql_check_username);
    $stmt_check_username->execute([':username' => $data['username']]);
    $result_username = $stmt_check_username->fetch(PDO::FETCH_ASSOC);

    if ($result_username['count'] > 0) {
        // Username already exists
        return -1;
    }


   	$hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);

	$sql ="INSERT INTO tbl_employee_account (last_name, first_name, middle_name, suffix_name, position, standing, province_address, municipal_address, barangay_address, street_address, block_no, phone_no, birth_date, age, gender, email, username, password, rate) VALUES (:last_name, :first_name, :middle_name, :suffix_name, :position, :standing, :province_address, :municipal_address, :barangay_address, :street_address, :block_no, :phone_no, :birth_date, :age, :gender,:email, :username, :password, :rate)";
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':last_name' => $data['last_name'],
			              ':first_name' => $data['first_name'],
			              ':middle_name' => $data['middle_name'],
			              ':suffix_name' => $data['suffix_name'],
			              ':position' => $data['position'],
                       ':standing' => $data['standing'],
                       ':province_address' => $data['province_address'],
                       ':municipal_address' => $data['municipal_address'],
                       ':barangay_address' => $data['barangay_address'],
                       ':street_address' => $data['street_address'],
                       ':block_no' => $data['block_no'],
                       ':phone_no' => $data['phone_no'],
                       ':birth_date' => $data['birth_date'],
			              ':age' => $data['age'],
			              ':gender' => $data['gender'],
			              ':email' => $data['email'],
			              ':rate' => $data['rate'],
							  ':username' => $data['username'],
							  ':password' => $hashed_password]);
														
		if($r){
			// success!!!
			return 1;
			
		}else{
			// somthing wrong with queries
			return 0;
		}
							
	}

//Read All Employee
	public function GetAllEmployee(){
		$sql = 'SELECT * FROM tbl_employee_account';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
}


//Read Only Employee
	public function GetEmployeeAcc($id){
		$sql = 'SELECT * FROM tbl_employee_account WHERE emp_acc_ID=:id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':id' => $id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}


// Read Only Employee by Username
public function GetEmployeeByUsername($username){
    $sql = 'SELECT * FROM tbl_employee_account WHERE username=:username';
    $stmt = $this->db->conn->prepare($sql);
    $stmt->execute([':username' => $username]);
    $data = $stmt->fetch(PDO::FETCH_OBJ);
    return $data;
}


//Count of Employee Account
public function TotalEmployeeAccounts() {
        // SQL query to count the total number of employee accounts
        $sql = "SELECT COUNT(*) AS total FROM tbl_employee_account";
        
        $stmt = $this->db->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Return the total count
        return $result['total'];
    }



//Count of Male Employee
public function TotalMaleEmployee() {
        // SQL query to count the total number of employee accounts
        $sql = 'SELECT COUNT(*) AS total FROM tbl_employee_account WHERE gender= "Male"';
        
        $stmt = $this->db->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Return the total count
        return $result['total'];
    }

//Count of Female Employee
public function TotalFemaleEmployee() {
        // SQL query to count the total number of employee accounts
        $sql = 'SELECT COUNT(*) AS total FROM tbl_employee_account WHERE gender= "Female"';
        
        $stmt = $this->db->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Return the total count
        return $result['total'];
    }


//Update Employee
	public function UpdateEmployee($data, $id){
      if(isset($data['password'])) {
      	$hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);
      }

		$sql = 'UPDATE tbl_employee_account SET username=:username, password=:password WHERE emp_acc_ID = :id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':username' => $data['username'],
							  ':password' => $hashed_password,
							  ':id' => $id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}


//Update Employee Info
	public function UpdateEmployeeInfo($data, $id){
		$sql = 'UPDATE tbl_employee_account SET last_name=:last_name, first_name=:first_name, middle_name=:middle_name, suffix_name=:suffix_name, position=:position, standing=:standing, province_address=:province_address, municipal_address=:municipal_address, barangay_address=:barangay_address, street_address=:street_address, block_no=:block_no, phone_no=:phone_no, birth_date=:birth_date, age=:age, gender=:gender, email=:email, rate=:rate WHERE emp_acc_ID = :id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':last_name' => $data['last_name'],
			              ':first_name' => $data['first_name'],
			              ':middle_name' => $data['middle_name'],
			              ':suffix_name' => $data['suffix_name'],
			              ':position' => $data['position'],
                       ':standing' => $data['standing'],
                       ':province_address' => $data['province_address'],
                       ':municipal_address' => $data['municipal_address'],
                       ':barangay_address' => $data['barangay_address'],
                       ':street_address' => $data['street_address'],
                       ':block_no' => $data['block_no'],
                       ':phone_no' => $data['phone_no'],
                       ':birth_date' => $data['birth_date'],
			              ':age' => $data['age'],
			              ':gender' => $data['gender'],
			              ':email' => $data['email'],
			              ':rate' => $data['rate'],
							  ':id' => $id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}


//Add employee bank info
public function addBankInfo($data, $user_id) {
    // Prepare the SQL query to insert bank information
    $sql = "INSERT INTO tbl_bank_info (emp_ID, acc_name, acc_no, bank_name) 
            SELECT :emp_ID, :acc_name, :acc_no, :bank_name 
            FROM tbl_employee_account 
            WHERE emp_acc_ID = :user_id";

    // Prepare the SQL statement
    $stmt = $this->db->conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':emp_ID', $user_id);
    $stmt->bindParam(':acc_name', $data['acc_name']);
    $stmt->bindParam(':acc_no', $data['acc_no']);
    $stmt->bindParam(':bank_name', $data['bank_name']);
    $stmt->bindParam(':user_id', $user_id);

    // Execute the query
    $success = $stmt->execute();

    // Check if the insertion was successful
    if ($success) {
        return 1; // Success
    } else {
        return 0; // Failed to insert bank information
    }
}



//Update Bank Info
public function updateBankInfo($data, $user_id) {
    $sql = "UPDATE tbl_bank_info SET acc_name = :acc_name, acc_no = :acc_no, bank_name = :bank_name WHERE emp_ID = :user_id";
    $stmt = $this->db->conn->prepare($sql);
    $stmt->bindParam(':acc_name', $data['acc_name']);
    $stmt->bindParam(':acc_no', $data['acc_no']);
    $stmt->bindParam(':bank_name', $data['bank_name']);
    $stmt->bindParam(':user_id', $user_id);
    
    $r = $stmt->execute();
    if ($r) {
        return 1; // Success
    } else {
        return 0; // Failed to insert bank information
    }
}



//Read Employee Bank Info
	public function GetEmployeeBank($id){
		$sql = 'SELECT * FROM tbl_bank_info WHERE emp_ID=:id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':id' => $id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}


//Read Employee Attendance
public function GetEmployeeAttendance($id){
    $sql = 'SELECT * FROM tbl_time_inout_record WHERE emp_ID=:id';
    $stmt = $this->db->conn->prepare($sql);
    $stmt->execute([':id' => $id]);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all records as associative arrays
    return $data;
}


//Read Employee Late
public function GetEmployeeLate($id){
    $sql = 'SELECT * FROM tbl_time_inout_record WHERE emp_ID=:id AND in_status = "Late"';
    $stmt = $this->db->conn->prepare($sql);
    $stmt->execute([':id' => $id]);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all records as associative arrays
    return $data;
}

//Read Employee Overtime
public function GetEmployeeOvertime($id){
    $sql = 'SELECT * FROM tbl_time_inout_record WHERE emp_ID=:id AND out_status = "Over Time"';
    $stmt = $this->db->conn->prepare($sql);
    $stmt->execute([':id' => $id]);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all records as associative arrays
    return $data;
}

//Read Employee Absent
public function GetEmployeeAbsent($id){
    $sql = 'SELECT * FROM tbl_time_inout_record WHERE emp_ID=:id AND attend_status = "Absent"';
    $stmt = $this->db->conn->prepare($sql);
    $stmt->execute([':id' => $id]);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all records as associative arrays
    return $data;
}


//Add Employee Attendance
public function addAttendance($data, $user_id) {
    $sql = "INSERT INTO tbl_time_inout_record (emp_ID, attend_date, attend_status, time_in, in_status, time_out, out_status, late_penalty, ot_rate) 
            SELECT :emp_ID, :attend_date, :attend_status, :time_in, :in_status, :time_out, :out_status, :late_penalty, :ot_rate 
            FROM tbl_employee_account 
            WHERE emp_acc_ID = :user_id";

    // Prepare the SQL statement
    $stmt = $this->db->conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':emp_ID', $user_id);
    $stmt->bindParam(':attend_date', $data['attend_date']);
    $stmt->bindParam(':attend_status', $data['attend_status']);
    $stmt->bindParam(':time_in', $data['time_in']);
    $stmt->bindParam(':in_status', $data['in_status']);
    $stmt->bindParam(':time_out', $data['time_out']);
    $stmt->bindParam(':out_status', $data['out_status']);
    $stmt->bindParam(':late_penalty', $data['late_penalty']);
    $stmt->bindParam(':ot_rate', $data['ot_rate']);
    $stmt->bindParam(':user_id', $user_id);

    // Execute the query
    $success = $stmt->execute();

    // Check if the insertion was successful
    if ($success) {
        return 1; // Success
    } else {
        return 0; // Failed to insert bank information
    }
}



//Calculate Salary
public function calculateTotalSalary($monthlyRate, $overtimeRate, $philHealth, $pagIbig, $SSS, $tin, $penalties) {
    $totalDeduction = $philHealth + $pagIbig + $tin + $SSS + $penalties;
    $totalSalary = ($monthlyRate + $overtimeRate) - $totalDeduction;
    return array('total_deduction' => $totalDeduction, 'total_salary' => $totalSalary);
}


//Add Employee Salary
public function addSalary($data, $user_id) {
    $sql = "INSERT INTO tbl_salary (emp_ID, monthly_rate, overtime_rate, philhealth, SSS, pagibig, TIN_ID, penalties, total_deduction, total_salary, date_given) 
            SELECT :emp_ID, :monthly_rate, :overtime_rate, :philhealth, :SSS, :pagibig, :TIN_ID, :penalties, :total_deduction, :total_salary, :date_given 
            FROM tbl_employee_account 
            WHERE emp_acc_ID = :user_id";

    // Prepare the SQL statement
    $stmt = $this->db->conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':emp_ID', $user_id);
    $stmt->bindParam(':monthly_rate', $data['monthly_rate']);
    $stmt->bindParam(':overtime_rate', $data['overtime_rate']);
    $stmt->bindParam(':philhealth', $data['philhealth']);
    $stmt->bindParam(':SSS', $data['SSS']);
    $stmt->bindParam(':pagibig', $data['pagibig']);
    $stmt->bindParam(':TIN_ID', $data['TIN_ID']);
    $stmt->bindParam(':penalties', $data['penalties']);
    $stmt->bindParam(':total_deduction', $data['total_deduction']);
    $stmt->bindParam(':total_salary', $data['total_salary']);
    $stmt->bindParam(':date_given', $data['date_given']);
    $stmt->bindParam(':user_id', $user_id);

    // Execute the query
    $success = $stmt->execute();

    // Check if the insertion was successful
    if ($success) {
        return 1; // Success
    } else {
        return 0; // Failed to insert bank information
    }
}


//Read Employee Salary
public function GetEmployeeSalary($id){
    $sql = 'SELECT * FROM tbl_salary WHERE emp_ID=:id';
    $stmt = $this->db->conn->prepare($sql);
    $stmt->execute([':id' => $id]);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all records as associative arrays
    return $data;
}


// Read Salary
public function GetSalary($id){
    $sql = 'SELECT * FROM tbl_salary WHERE salary_ID=:id';
    $stmt = $this->db->conn->prepare($sql);
    $stmt->execute([':id' => $id]);
    $data = $stmt->fetch(PDO::FETCH_OBJ); // Fetch one record as an associative array
    return $data;
}



//Delete Employee
	public function DeleteEmployee($id){
		$sql = 'DELETE FROM tbl_employee_account WHERE emp_acc_ID = :id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':id' => $id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
  }


}

?>