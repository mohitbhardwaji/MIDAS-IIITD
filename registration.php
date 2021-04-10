<?php

session_start();
// db login details

$server = "localhost";
$pass = "Gold@12345";
$name = "sumbha40_useraccounts";
// making connection to the server
$con = new mysqli($server,$name,$pass);
 if ($con->connect_error) {
     die("Connection failed: " . $con->connect_error);
   }
  else{ 
 
mysqli_select_db($con,'sumbha40_useraccounts');
$username            = $_POST['user'];
$password        = $_POST['password'];
// checking username if already exist or not
$s ="SELECT * FROM user1 WHERE  username ='$username'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"email already taken";
}
else{
//     adding user details to the db
    $reg = "INSERT INTO user1(username,password) VALUES ('$username','$password')";
    mysqli_query($con,$reg);
    echo"registration successfull";
    header('Location:http://mohitbhardwaj.site/loginf.php');
}
}

?>
