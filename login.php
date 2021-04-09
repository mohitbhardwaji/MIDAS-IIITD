<?php
session_start();

$server = "localhost";
$pass = "";
$name = "root";

$con = new mysqli($server,$name,$pass);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
 else{ echo "Connected successfully";
 }

mysqli_select_db($con,'useraccounts');
$username            = $_POST['user'];
// $email         = $_POST['user-email'];
$password        = $_POST['password'];

$s ="SELECT * FROM usertable WHERE username ='$username'";

$result = mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($num==1){
    header('Location:dashboard.php');
}
else{
    header('Location:loginf.html');
echo "check details ";
}

?>