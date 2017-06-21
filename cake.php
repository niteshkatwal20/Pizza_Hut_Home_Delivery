<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/20/2017
 * Time: 5:08 PM
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
                    <div class="panel-heading">Black Forest</div>
                    <div class="panel-body"><img src="image/black.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer"> Cost : Rs 1000</div>


                    <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">White Forest</div>
                    <div class="panel-body"><img src="image/white.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer"> Cost : Rs 1500</div>

                    <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Chocolate Cake</div>
                    <div class="panel-body"><img src="image/chocolate.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer"> Cost : Rs 2000</div>

                    <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Cookie</div>
                    <div class="panel-body"><img src="image/cookie.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer"> Cost : Rs 50(per piece)</div>

                    <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Muffin</div>
                    <div class="panel-body"><img src="image/muffin.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer"> Cost : Rs 90(per piece(normal))</div>
                    <div class="panel-footer"> Cost : Rs 110(per piece(chocolate))</div>
                    <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Bread</div>
                    <div class="panel-body"><img src="image/bread.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer"> Cost : Rs 50(per loaf)</div>
                    <div class="panel-footer"> Cost : Rs 200(per packet)</div>
                    <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>

                </div>
            </div>
        </div>
    </div><br><br>

    <div class="panel-footer"> <a href="menu.php">Click here to go back to menu</a></div>

</body>
</html>


