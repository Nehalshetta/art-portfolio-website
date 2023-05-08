<?php
$name= $_POST["name"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$message= $_POST["message"];


/*"<br>name: ".$name;
echo"<br>email: ".$email;
echo"<br>phone: ".$phone;
echo"<br>message: ".$message;

echo '<script type ="text/JavaScript">';  
echo 'alert("Your Email Has been sent successfully")';  
echo '</script>';  */


include "connection.php";

$insertUser = "INSERT INTO contact(name,email,phone,message) values('$name','$email','$phone','$message')";
$result= mysqli_query($con,$insertUser);
header('Location: About.php');








?>