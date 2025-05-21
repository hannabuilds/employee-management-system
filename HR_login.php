<?php
include('conn.php');

class Login {
  private $conn;

  public function __construct($conn) {
    $this->conn = $conn;
  }


  public function authenticate($username, $password) {
    try {
      // Prepare the SQL statement
      $stmt = $this->conn->prepare("SELECT * FROM tbl_hr WHERE username = :username");

      // Bind parameters
      $stmt->bindParam(':username', $username);

      // Execute the query
      $stmt->execute();

      // Check if a row exists
      if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if(password_verify($password, $user['password'])) {
          return true; // Authentication successful
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

// Check if the login form is submitted
if(isset($_POST['login'])) {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Create a new instance of the conn class to establish a database connection
    $database = new conn();

    // Create a new instance of the Login class
    $login = new Login($database->conn); // $conn is an instance of the conn class from conn.php

    // Authenticate user
    $auth_result = $login->authenticate($username, $password);
    if($auth_result === true) {
        // Redirect to the admin dashboard
        header("Location: HR/index.php");
        exit(); // Make sure to exit after redirection
    } else {
        // Handle incorrect login credentials
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