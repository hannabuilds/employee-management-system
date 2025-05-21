<?php
include('conn.php');
session_start();

class Login {
  private $conn;

  public function __construct($conn) {
    $this->conn = $conn;
  }


  public function authenticate($username, $password) {
    try {
      
      $stmt = $this->conn->prepare("SELECT emp_acc_ID, username, password FROM tbl_employee_account WHERE username = :username");

      
      $stmt->bindParam(':username', $username);

      
      $stmt->execute();

      
      if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if(password_verify($password, $user['password'])) {
      
          $_SESSION['username'] = $user['username'];
          $_SESSION['emp_acc_ID'] = $user['emp_acc_ID'];

          return true; 
        } else {
          return "Incorrect password"; // Incorrect password
        }
      } else {
        return "Incorrect username"; // Incorrect username
      }
    } catch (PDOException $e) {
      // Handle database errors
      echo "Error: " . $e->getMessage();
      return false;
    }
  }
}


if(isset($_POST['login'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $database = new conn();

    
    $login = new Login($database->conn); 
    // Authenticate user
    $auth_result = $login->authenticate($username, $password);
    if($auth_result === true) {
        
        header("Location: employee/index.php");
        exit(); 
    } else {
        
        $error = $auth_result;
    }
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hotel de Luna</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/luna.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->

  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="#" class="text-nowrap logo-img text-center d-block w-100">
                  <img src="assets/images/logos/transparent.png" width="300" alt="">
                </a>
                <?php if (isset($error) && $error == "Incorrect password") 

                    echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                        <strong>$error</strong>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                      </div>"; 
                 ?>

                 <?php if (isset($error) && $error == "Incorrect username") 

                    echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                        <strong>$error</strong>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                      </div>"; 
                 ?>
                <form action="" method="post">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User ID</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="username" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                  </div>
                 <button type="submit" name="login" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>