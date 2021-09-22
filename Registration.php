<!DOCTYPE HTML>  
<html>
<head>

<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
include_once('header.php');
require_once "db.php";
include_once('link.php');

$fname_error = $email_error = $password_error = "";
$fname = $email = $lname = $password = "";

if(isset($_SESSION['ID'])!="") {
  header("Location: welcome.php");
}

    if (isset($_POST['create'])) {
        $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $error = '';
        if (!preg_match("/^[a-zA-Z ]+$/",$fname)) {
            $fname_error = "Name must contain only alphabets and space";
            $error = +1;
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please Enter Valid Email ID";
            $error = +1;
        }
        if(strlen($password) < 6) {
            $password_error = "Password must be minimum of 6 characters";
            $error = +1;
        } 
        
        if (!$error) {
            if(mysqli_query($conn, "INSERT INTO tbluser(Firstname, Lastname, email, password) VALUES('" . $fname . "', '" . $lname . "' , '" . $email . "', '" . md5($password) . "')")) {
             header("location: login.php");
             exit();
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
    }

?>

<div id="frmRegistration">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<h1>Registration Form</h1>
  <p><span class="error">* required field</span></p>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">First Name:</label>
    <span class="error">* </span>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" value="" placeholder="Enter Firstname" required="">
      <span class="text-danger"><?php if (isset($fname_error)) echo $fname_error; ?></span>
    </div>
  </div>
<br>
<br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
    <span class="error"> . </span>
    <div class="col-sm-6">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname">
    </div>
  </div>
<br>
<br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <span class="error">* </span>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" value="" placeholder="Enter email" required="">
      <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
    </div>
  </div>
<br>
<br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <span class="error">*</span>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" required="">
      <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <br>
      <br>
      <button type="submit" name="create" class="btn btn-primary">Submit</button>
      Already have a account?<a href="login.php" class="btn btn-default">Login</a>
    </div>
  </div>
</form>
</div>


</body>
</html>