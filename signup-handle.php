<?php

$email= $_POST["email"];
$firstName= $_POST["fname"];
$lastName= $_POST["lname"];
$password= $_POST["password"];

echo"email: ".$email;
echo"<br>firstname: ".$firstName;
echo"<br>lastname: ".$lastName;
echo"<br>password: ".$password;



include "connection.php";


$login = "SELECT email,pswrd FROM sign_up WHERE email='$email' and pswrd ='$password'  ";
$result= mysqli_query($con,$login);
$row=mysqli_fetch_array($result);
$count= mysqli_num_rows($result);


if($row!=null){
  if($row["email"]==$email){
    header('Location: sign-up.php');
  }
}
else{

  session_start();
  $_SESSION["loggedUser"]=$email;
  $insertUser = "INSERT INTO sign_up(fName,lName,email,pswrd) values('$firstName','$lastName','$email','$password')";
  $result= mysqli_query($con,$insertUser);
  header('Location: user.php');
}




?>
