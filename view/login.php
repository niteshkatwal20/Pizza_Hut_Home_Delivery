<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/1/2017
 * Time: 3:20 PM
 *
 */
session_start();
 include_once ("../controller/UserController.php");
include_once ("../model/Customer.php");

$message ='';

if(isset($_POST['login'])){
    $c = new Customer();
    $c ->setEmail($_POST['Email']);
$c -> setPassword($_POST['Password']);
    $u = new UserController();
    $res =$u -> login($c);
    $profile =$u -> getUserInfo($c);

    if($res){
        header('location:../index.php');
        $_SESSION['get_access'] = true;
        $_SESSION['Id'] = $profile[0];
        $_SESSION['Email'] = $profile[3];
        $_SESSION['Password'] = $profile[9];


    }
    else{
        $message = "Invalid Email or Password";
    }
}


?>

<html>
<head>
    <title>
        Pizza Hut Resturent & Bar
    </title>
<link rel ="stylesheet" type="text/css" href="../css/login.css"/>

</head>
<body>
<div class="first">
 
    <div class="css">

        <form method="post" action="">
            <fieldset>
                <legend>  Login  </legend>

                <div class="form">

                    <b> Email </b>  <input type="text" name="Email" class="text" placeholder="Email" required="required"/>
                    <br> <br>


                    <b> Password  </b>  <input type ="password" name="Password" class="text" placeholder="Password" required="required"/>


                    <p><input type="checkbox" name="radio" class="check" title="login"><b>Keep logged in</b></p>

                    <p><input type="submit" name="login"  class="login" value="Login"/> </p>  <br> <br><br>

                    <a href="account.php">Create new account</a> <br>




            </fieldset>

        </form>
		</div>
    </div>
</body>

</html>


