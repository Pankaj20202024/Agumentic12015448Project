<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  // Check if username is empty
  if (empty(trim($_POST["username"]))) {
    $username_err = "Username cannot be blank";
  } else {
    $sql = "SELECT id FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      // Set the value of param username
      $param_username = trim($_POST['username']);

      // Try to execute this statement
      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) == 1) {
          $username_err = "This username is already taken";
        } else {
          $username = trim($_POST['username']);
        }
      } else {
        echo "Something went wrong";
      }
    }
  }

  mysqli_stmt_close($stmt);


  // Check for password
  if (empty(trim($_POST['password']))) {
    $password_err = "Password cannot be blank";
  } elseif (strlen(trim($_POST['password'])) < 5) {
    $password_err = "Password cannot be less than 5 characters";
  } else {
    $password = trim($_POST['password']);
  }

  // Check for confirm password field
  if (trim($_POST['password']) != trim($_POST['confirm_password'])) {
    $password_err = "Passwords should match";
  }


  // If there were no errors, go ahead and insert into the database
  if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

      // Set these parameters
      $param_username = $username;
      $param_password = password_hash($password, PASSWORD_DEFAULT);

      // Try to execute the query
      if (mysqli_stmt_execute($stmt)) {
        header("location: login.php");
      } else {
        echo "Something went wrong... cannot redirect!";
      }
    }
    mysqli_stmt_close($stmt);
  }
  mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="SignUp.css">


  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>

<body>

  <div class="container">
    <br>
    <hr>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <header class="card-header">
            <a href="login.php" class="float-right btn btn-outline-info mt-1">Log in</a>
            <h4 class="card-title mt-2">Sign up</h4>
          </header>
          <article class="card-body">
            <form action="" method="post">
              <div class="form-row">
                <div class="col form-group">
                  <label>First name </label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col form-group">
                  <label>Last name</label>
                  <input type="text" class="form-control" placeholder=" ">
                </div>
              </div>


              <div class="form-group">
                <label for="inputEmail4">Email address</label>
                <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Email">
                <small class="form-text text-muted">We'll never share your email with anyone
                  else.</small>
              </div>
              <div class="form-group">
                <label class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" value="option1">
                  <span class="form-check-label"> Male </span>
                </label>
                <label class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" value="option2">
                  <span class="form-check-label"> Female</span>
                </label>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>City</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Country</label>
                  <select id="inputState" class="form-control">
                    <option> Choose...</option>
                    <option>Uzbekistan</option>
                    <option>Russia</option>
                    <option selected="">United States</option>
                    <option>India</option>
                    <option>Afganistan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword4">Create password</label>
                <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="inputPassword4">Confirm password</label>
                <input type="password" class="form-control" name="confirm_password" id="inputPassword"
                  placeholder="Confirm Password">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-info btn-block">
              </div>
              <small class="text-muted Information">By clicking the 'Submit' button, you confirm that you accept our
                Terms of use and Privacy Policy.</small>
            </form>
          </article>
          <div class="border-top card-body text-center ">Have an account? <a href="login.php" id="login_link">Log In</a>
          </div>
        </div>
      </div>

    </div>


  </div>

  <br><br>


</body>

</html>
