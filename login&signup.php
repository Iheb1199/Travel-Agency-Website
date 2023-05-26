<?php
session_start(); 
if ($_POST) 
{
  extract($_POST);   
} 
if (!empty($_POST['btn'])) 
{ 
  $_SESSION['btn'] = $btn; 
}
else if (!empty($_POST['btn2'])) 
  $_SESSION['btn2'] = $bt;  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/travel (1).png" type="image/x-icon">
    <title>Trip It Online Travel Agency</title>
</head>
<body>
<section class="forms-section" style="padding-top: 50px; padding-right:35px;">
    <a style='position: absolute; left: 100px; top: 20px; border: solid black; padding: 10px 15px; font-weight: bold; text-decoration: none; color: black;' href='index.php' >Home</a>
    <link rel="stylesheet" href="css/login&signup.css"> 
    <div class="forms">
      <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
          Login
          <span class="underline"></span>
        </button>  
        <?php
        if ($_SESSION['info']=='wrong email or password')  
          echo "<div style='position: relative; left: 130px; text-transform: capitalize; font-size:20px; font-style:italic;  background-color:rgba(235, 54, 8, 0.753); color:white; font-weight: 400;  text-align: center;  top: 460px; '>wrong email or password</div>";?>
        <form class="form form-login" action='lgact.php' method="post">
          <fieldset>
            <legend>Please, enter your email and password for login.</legend>
            <div class="input-block">
              <label for="login-email">Email</label>
              <input name="lg_email" type="email" required>
            </div>
            <div class="input-block">
              <label for="login-password">Password</label>
              <input id="lg_password" name ="lg_password" type="password" required>
            </div>
          </fieldset>
          <input type="submit" class="btn-login" id="lg-btn" name="lg-btn" value="Login">
        </form>
      </div>
      <div class="form-wrapper">
        <button type="button" class="switcher switcher-signup">
          Sign Up
          <span class="underline"></span>
        </button>
        <?php 
        if (!empty($_POST["sign-up-btn"])) 
        {
          extract($_POST); 
          $con = mysqli_connect("localhost","root", "", "trip_it");
          $res = $con -> query("SELECT * from users where email = '$email'"); 
          if ($res -> num_rows == 1) 
            echo "<div style='position: relative; right: 140px; text-transform: capitalize; font-size:20px; font-style:italic;  background-color:rgba(235, 54, 8, 0.753); color:white; font-weight: 400;  text-align: center;  top: 490px; '>already existant</div>";  
          else if ($password!=$confirm) 
            echo "<div style='position: relative; right: 140px; text-transform: capitalize; font-size:20px; font-style:italic;  background-color:rgba(235, 54, 8, 0.753); color:white; font-weight: 400;  text-align: center;  top: 490px; '>wrong confirmation</div>";  
          else 
          { 
            $sql = "INSERT INTO users (email, password) VALUES (trim('$email'), MD5('$password'))";
            mysqli_query($con, $sql);  
            $_SESSION['info'] = 'yes';  
            $_SESSION['email'] = trim($email);     
            header('location:dashboarduser.php');  
          } 
          mysqli_close($con);  
        }
      ?>  
        <form class="form form-signup" method="post"> 
          <fieldset>
            <legend>Please, enter your email, password and password confirmation for sign up.</legend>
            <div class="input-block">
              <label for="signup">Email</label>
              <input name="email" type="email" required>
            </div>
            <div class="input-block">
              <label for="signup-password">Password</label>
              <input name="password" type="password" required>
            </div>
            <div class="input-block">
              <label for="signup-password-confirm">Confirm password</label>
              <input id="signup-password-confirm" name='confirm' type="password" required>
            </div>
          </fieldset>
          <input type="submit" class="btn-signup" id="sign-up-btn" name="sign-up-btn" value="Submit">   
        </form>
      </div>
    </div>
    <script>
      const switchers = [...document.querySelectorAll('.switcher')]
    switchers.forEach(item => {
	    item.addEventListener('click', function() {
		    switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		    this.parentElement.classList.add('is-active')
	    })
})
    </script>
  </section>
</body>
</html>