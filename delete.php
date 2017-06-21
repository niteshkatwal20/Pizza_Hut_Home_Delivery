<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/18/2017
 * Time: 12:30 PM
 */
include_once ('../DBConnection/DBConnection.php');
$id=$_GET['Id'];
$query="DELETE FROM user where Id=$id";
$result=$conn-> query($query);
header('location:../viewuser.php');
$conn->error;
?>