<?php

$email= $_POST["email"];
$password= $_POST["password"];

echo"email: ".$email;
echo"<br>password: ".$password;


if($email == "admin@gmail.com"){
  session_start();
  $_SESSION["loggedUser"]=$email;
  header('Location: admin.php');
}

include "connection.php";

$login = "SELECT email,pswrd FROM sign_up WHERE email='$email' and pswrd ='$password'  ";
$result= mysqli_query($con,$login);

$count= mysqli_num_rows($result);

if($count==1){
    session_start();
    $_SESSION["loggedUser"]=$email;
    header('Location: user.php');
}
else{
    echo"<br>Invalid Email and Password";
}

?>
