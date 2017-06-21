<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/20/2017
 * Time: 9:08 AM
 */
include_once ('../model/Order.php');
include_once ('../controller/OrderController.php');

if(isset($_POST['submit'])){
$item_name = $_POST['item_name'];
    $qty = $_POST['qty'];
    $item_type = $_POST['item_type'];
   $time = $_POST['time'];
    $add = $_POST['address'];

    $order = new Order();

    $order -> setId(Null);
    $order -> setItemName($item_name);
    $order -> setQty($qty);
    $order -> setItemType($item_type);
    $order ->setTime($time);
    $order -> setAddress($add);


    echo '<script type="text/javascript"> alert("Your food items are sucessfully ordered")
window.location="../menu.php"';
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <title>Order your food here</title>
    <link rel="stylesheet" href="" type="text/css" />
    <script type="text/javascript"></script>
</head>

<body>

<div class="container">
    <div class="jumbotron">
        <h1>Order Menu Form <small>Pizza Hut</small></h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Enter food items name</div>
                <div class="panel-body">

                    <form method="post" action=""enctype="multipart/form-data">
                        <table class="table table-hover">
                            <tr>
                                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                            </tr>
                            <tr>
                                <td>Food Items Name</td>
                                <td><input type="text" class="form-control" name="item_name" placeholder="Enter Items  name"></td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td><input type="text" class="form-control" name="qty"  placeholder="Enter Quantity"></td>
                            </tr>
                            <tr>

                            <tr>
                                <td>Food Items Type</td>
                                <td><input type="text" class="form-control" name="item_type" placeholder="Enter Food Item Type"></td>
                            </tr>
                            <tr>
                                <td>Delivery Time</td>
                                <td><input type="time" class="form-control" name="time" placeholder="Enter Time You want to get order"></td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td><input type="text" class="form-control" name="address" placeholder="Enter address where You want to get order"></td>
                            </tr>

                            <tr>
                                <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="submit" value="Submit"></td>
                            </tr>
                        </table>
                    </form>


</body>
</html>
