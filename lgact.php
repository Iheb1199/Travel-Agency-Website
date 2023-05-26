<?php  
session_start(); 
if ($_POST) 
{
    extract($_POST);
    $con = mysqli_connect("localhost","root", "", "trip_it"); 
    $res = $con -> query("SELECT * from users where email = trim('$lg_email') and password = MD5('$lg_password')");   
    if ($res -> num_rows == 1)
    {
        mysqli_close($con); 
        $_SESSION['info'] = 'yes';   
        $_SESSION['email'] = trim($lg_email); 
        header('location:dashboarduser.php');
    }
    else
    { 
        $_SESSION['info'] = 'wrong email or password'; 
        header('location:login&signup.php');
    } 
    mysqli_close($con);
}
?>  