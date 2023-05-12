<?php 
session_start();
include('../config/dbcon.php');
if(isset($_POST['register_btn']))
{
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
   
    $password  = mysqli_real_escape_string($con,$_POST['password']);
    $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
    if ($password == $cpassword)

$check_email_query = "SELECT email FROM users WHERE email='$email' ";
$check_email_query_run = mysqli_query($con, $check_email_query); 

if(mysqli_query_num_rows($check_email_run) > )
{
    $_SESSION[message] = "email already register";
    header ('location:../register.php');
}
else{
    if(password == $cpassword)
    {

    }
{
    else{
        $_SESSION[message] = "password do not match" ;
        header('location:../register.php')
    }
}


$insert_query = "INSERT INTO users(name.email,phone,password)VALUE('$name',$email,'$phone','$password','$cpassword')" ;
$insert_query_run = mysqli_query($con,$insert_query);
if($insert_query_run)

    $SESSION['message'] = "Registered successfully";
     header('location: signin.php');
}
}else{
    $_SESSION['message'] = "something went wrong";
    header('location:register.php');
}


?>
