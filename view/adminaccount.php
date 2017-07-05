<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/28/2017
 * Time: 4:29 PM
 */


session_start();

include_once ("../controller/AdminController.php");
include_once("../model/Admin.php");
include_once("../DBConnection/DBConnection.php");

$d = new DBConnection;
$sql="select MAX(admin_id) from admin ";
$sql1 = "select Username from admin";
$res = $d -> getConnection() -> query($sql);
$res1 = $d -> getConnection() -> query($sql1);
$row = mysqli_fetch_row($res);
$row1 = mysqli_fetch_row($res1);
$message ="";
$message_email = '';


if(isset($_POST['admincreate'])){/*
    if (!in_array($_POST['Email'], $row1)) {
        if ($_POST['Password']) {*/

    $r = new Admin();
    $r -> setAdminId(NULL);
    $r -> setUsername($_POST['Username']);
    $r -> setPassword($_POST['Password']);

    $r -> setName($_POST['Name']);
    $r -> setAddress($_POST['Address']);
    $r -> setPhone($_POST['Phone_no']);

    $r -> setEmail($_POST['Email']);



    $c = new AdminController();
    $res = $c -> register($r);

 header("location:../adminlogin.php");
} /*else {
            $message = "Password mismatch";
        }
    } else {
        $message_username = 'Username already exists';
    }*/


?>


<html>

<head>

    <title>
        PIZZA HUT HOME DELIVERY SYSTEM
    </title>
    <link href="../css/account.css" type="text/css" rel="Stylesheet">
</head>

<body>

<fieldset>
    <legend> <h1>  <b> Create an new Account</b> </h1>  </legend>



    <form action="" method="post">

        <b> Username: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="Username" placeholder="Username" class="text" required="required"/>


        <br> <br>



        <b>Password : </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


        <input type="password" name="Password" class="text" required="required"  />

        <br> <br>
        <b> Name   :</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <input type="text"  name="Name" placeholder="Enter your name" class="text" required="required"/>

        <br><br>

        <b> Address   :</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <input type="text"  name="Address" placeholder="Address" class="text" required="required"/>

        <br><br>


        <b>Phone No : </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="Phone_no" placeholder="Phone No" class="text" required="required" />
        <br> <br>

        <b>  Email :  </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="email"  name="Email" placeholder="Email" class="text" required="required" />

        <br> <br>



        <input type="submit"  name="admincreate" class="btn" value="Create Account"/>
        <br>
        Already have an account then click
        <a href="adminlogin.php">here</a>

</body>

</html>