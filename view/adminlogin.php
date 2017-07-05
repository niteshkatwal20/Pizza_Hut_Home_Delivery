<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/28/2017
 * Time: 2:55 PM
 */
session_start();
include_once ("../controller/AdminController.php");
include_once ("../model/Admin.php");

$message ='';

if(isset($_POST['adminlogin'])){
    $a = new Admin();
    $a ->setUsername($_POST['Username']);
    $a -> setPassword($_POST['Password']);
    $u = new AdminController();
    $res =$u -> login($a);
    $profile =$u -> getUserInfo($a);

    $_SESSION['get_access'] = true;
    $_SESSION['Id'] = $profile[0];
    $_SESSION['Email'] = $profile[1];
    $_SESSION['Password'] = $profile[2];

    if($res){
        $_SESSION['get_access'] = true;
        $_SESSION['Id'] = $profile[0];
        $_SESSION['Email'] = $profile[1];
        $_SESSION['Password'] = $profile[2];
        header('location:../admindashboard.php');
    }
    else{
        $message = "Invalid Email or Password";
    }
}


?>

<html>
<head>
    <title>
     Admin Login
    </title>
    <link rel ="stylesheet" type="text/css" href="../css/login.css"/>

</head>
<body>
<div class="first">

    <div class="css">

        <form method="post" action="">
            <fieldset>
                <legend>Admin Login  </legend>

                <div class="form">

                    <b> Username </b>  <input type="text" name="Username" class="text" placeholder="Enter your Username" required="required"/>
                    <br> <br>


                    <b> Password  </b>  <input type ="password" name="Password" class="text" placeholder="Password" required="required"/>


                    <p><input type="checkbox" name="radio" class="check" title="login"><b>Keep logged in</b></p>

                    <p><input type="submit" name="adminlogin"  class="login" value="Login"/> </p>  <br> <br><br>


<a href="adminaccount.php">Create account for <center> Admin</center></a> <br>



            </fieldset>

        </form>
    </div>
</div>
</body>

</html>


