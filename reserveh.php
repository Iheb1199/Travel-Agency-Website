<?php 
session_start();    
if ($_POST)
{ 
    extract($_POST);   
    $con = mysqli_connect("localhost","root", "", "trip_it"); 
    $dt1 = new DateTime(); 
    if ($checkin <= $dt1->format('Y-m-d')) 
        $_SESSION['info'] =  'invalid checkin date'; 
    else if ($checkout <= $checkin) 
        $_SESSION['info'] = 'invalid checkout date'; 
    else if ($ad_nbs <= 0) 
        $_SESSION['info'] ="invalid number of adults"; 
    else if ($ch_nbs < 0) 
        $_SESSION['info'] = "invalid number of children"; 
    else 
    {
        $_SESSION['info'] = 'reservation confirmed'; 
        $sql ="INSERT into reservation_hotel (hotel, checkindt, checkoutdt, adultsnb, chnb, email) values('$hotel_select','$checkin','$checkout',$ad_nbs, $ch_nbs,'$email_inpt')"; 
         mysqli_query($con, $sql);   
    }
    mysqli_close($con);  
    $_SESSION['email'] = $email_inpt;   
    $_SESSION['btn']='';
    $_SESSION['btn2'] = '';   
    header('location:dashboarduser.php');  
}	
?>       