<?php 
session_start();    
if ($_POST)
{ 
    extract($_POST);   
    $con = mysqli_connect("localhost","root", "", "trip_it"); 
    $dt1 = new DateTime(); 
    if ($dp_dt <= $dt1->format('Y-m-d')) 
        $_SESSION['info'] =  'invalid departure date'; 
    else if ($arr_dt <= $dp_dt) 
        $_SESSION['info'] = 'invalid arrival date'; 
    else if ($adu_nbs <= 0) 
        $_SESSION['info'] ="invalid number of adults"; 
    else if ($chi_nbs < 0) 
        $_SESSION['info'] = "invalid number of children"; 
    else 
    {
        $_SESSION['info'] = 'reservation confirmed'; 
        $sql ="INSERT into reservation_trip (trip, dpdt, arrdt, adultsnb, chnb, email) values('$trip_select','$dp_dt','$arr_dt',$adu_nbs, $chi_nbs,'$email_ip')"; 
        mysqli_query($con, $sql);     
    }
    mysqli_close($con);  
    $_SESSION['email'] = $email_ip;   
    $_SESSION['btn']='';
    $_SESSION['btn2'] = '';   
    header('location:dashboarduser.php');  
}	
?>     