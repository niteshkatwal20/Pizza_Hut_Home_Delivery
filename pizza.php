<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/20/2017
 * Time: 4:48 PM
 */?>
<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/20/2017
 * Time: 4:35 PM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/20/2017
 * Time: 4:23 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pizza Hut</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default rounded borders and increase the bottom margin */
        .navbar {
            margin-bottom: 50px;
            border-radius: 0;
        }

        /* Remove the jumbotron's default bottom margin */
        .jumbotron {
            margin-bottom: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>
<body>

<div class="jumbotron">

    <div class="container">
        <div class="row">



            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Chicken Pizza</div>
                    <div class="panel-body"><img src="image/chicken.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer"> Cost : Rs 100</div>
                    <div class="panel-footer"> Cost : Rs 150(extra cheese)</div>
                    <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Veg Pizza</div>
                    <div class="panel-body"><img src="image/veg.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer"> Cost : Rs 100</div>
                    <div class="panel-footer"> Cost : Rs 150(extra cheese)</div>
                    <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>

                </div>
            </div>


        </div>
    </div><br><br>

    <div class="panel-footer"> <a href="menu.php">Click here to go back to menu</a></div>

</body>
</html>



