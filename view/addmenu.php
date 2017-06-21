<?php
include_once ("../model/Item.php");
include_once ("../controller/ItemController.php");

if(isset($_POST['submit'])){

    $name=$_POST['item_name'];
    $no=$_POST['item_no'];
    $price =$_POST['price'];

$item= new Item();

    $controller = new ItemController();

        $item ->setId(NULL);
    $item -> setName($name);
    $item ->setNo($no);
    $item -> setPrice($price);

    $controller -> createItem($item);

    echo '<script type="text/javascript"> alert("Item Added")
	window.location = "addmenu.php";

	</script>';

}
?>



<html>
<head>
    <link href="../css/signupStyle.css" type="text/css" rel="Stylesheet">
    <title>Add menu</title>
</head>
<body>

<div class="wrap">
    <div class="form">
        <form action="#" method="post" enctype="multipart/form-data">
            <h1Add Menu</h1><hr>
            <p>Item Name</p>
            <input class="size" type="text" placeholder="item name" name="item_name">
            <p>Item No</p>
            <input class="size" type="number" placeholder="Item No" name="item_no">
            <p>Price</p>
            <input class="size" type="float" placeholder="Price" name="price">

            <p>Choose Item Picture</p>
            <div class="image">
                <input type="file" value="Choose picture" id="choose" name="image_upload" accept="image/png, image/jpeg">
            </div>
            <input class="size" type="submit" value="ADD" id="create" name="submit">
        </form>
        <br> <br>
        <a href="menu.php">Click here for your order</a>
        <div class="info">
            <?php

            ?>
        </div>
    </div>
</div>
</body>
</html>


