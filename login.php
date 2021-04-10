<?php
session_start();
// db server login details 
$server = "localhost";
$pass = "Gold@12345";
$name = "sumbha40_useraccounts";
//connecting to the server
$con = new mysqli($server,$name,$pass);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
 else{ echo "Connected successfully";
 }

mysqli_select_db($con,'sumbha40_useraccounts');
$username            = $_POST['user'];
$password        = $_POST['password'];
//checking user password and username in the db
$s ="SELECT * FROM user1 WHERE username ='$username'&& password ='$password'";

$result = mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($num==1){

    header('Location:http://mohitbhardwaj.site/dashboard.php');
}
else{
    header('Location:http://mohitbhardwaj.site/loginf.php');
    //loged in 
echo "check details ";
}

?>
