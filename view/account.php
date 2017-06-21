
<?php
session_start();

include_once ("../controller/UserController.php");
include_once("../model/Customer.php");
include_once("../DBConnection/DBConnection.php");

$d = new DBConnection;
$sql="select MAX(Id) from user ";
$sql1 = "select Email from user";
$res = $d -> getConnection() -> query($sql);
$res1 = $d -> getConnection() -> query($sql1);
$row = mysqli_fetch_row($res);
$row1 = mysqli_fetch_row($res1);
$message ="";
$message_email = '';


if(isset($_POST['create'])){/*
    if (!in_array($_POST['Email'], $row1)) {
        if ($_POST['Password']) {*/

            $r = new Customer();
            $r -> setId(NULL);
            $r -> setFirstName($_POST['Fname']);
            $r -> setLastName($_POST['Lname']);

            $r -> setPhoneNo($_POST['Phone_no']);
            $r -> setAddress($_POST['Address']);
            $r -> setemail($_POST['Email']);

            $r -> setPassword($_POST['Password']);



            $c = new UserController();
            $res = $c -> register($r);

    echo '<script type="text/javascript"> alert("User Created")
	window.location = "../index.php";

	</script>';
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

<b>  First Name: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="Fname" placeholder="First Name" class="text" required="required"/> 


<br> <br>



<b>Last Name : </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<input type="text" name="Lname" placeholder="Last Name"class="text" required="required"  />

<br> <br>
<b> Address   :</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="text"  name="Address" placeholder="Address" class="text" required="required"/>

<br><br>


<b>Phone No : </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="Phone_no" placeholder="Phone No" class="text" required="required" />
<br> <br>

<b>  Email :  </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="email"  name="Email" placeholder="Email" class="text" required="required" />

<br> <br>



<b>Password: </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password"  name="Password" placeholder="Password" class="text" required="required"/>
<br> <br>



<input type="submit"  name="create" class="btn" value="Create Account"/>
<br>
Already have an account then click
<a href="login.php">here</a>

</body>

</html>