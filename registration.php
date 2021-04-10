<?php

session_start();
header('Location:loginf.html');
$server = "localhost";
$pass = "";
$name = "root";

$con = new mysqli($server,$name,$pass);
// if ($con->connect_error) {
//     die("Connection failed: " . $con->connect_error);
//   }
//  else{ echo "Connected successfully";
//  }<?php

session_start();


$server = "localhost";
$pass = "Gold@12345";
$name = "sumbha40_useraccounts";

$con = new mysqli($server,$name,$pass);
 if ($con->connect_error) {
     die("Connection failed: " . $con->connect_error);
   }
  else{ 
 
mysqli_select_db($con,'sumbha40_useraccounts');
$username            = $_POST['user'];
$password        = $_POST['password'];

$s ="SELECT * FROM user1 WHERE  username ='$username'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"email already taken";
}
else{
    
    $reg = "INSERT INTO user1(username,password) VALUES ('$username','$password')";
    mysqli_query($con,$reg);
    echo"registration successfull";
    header('Location:http://mohitbhardwaj.site/loginf.php');
}
}

?>
mysqli_select_db($con,'useraccounts');
$username            = $_POST['user'];
// $email         = $_POST['user-email'];
$password        = $_POST['password'];

$s ="SELECT * FROM usertable WHERE  username ='$username'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"email already taken";
}
else{
    $reg = "INSERT INTO usertable(username,password) VALUES ('$username','$password')";
    mysqli_query($con,$reg);
    echo"registration successfull";

}

?>
