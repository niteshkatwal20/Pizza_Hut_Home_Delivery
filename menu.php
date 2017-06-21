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
  <div class="container text-center">
    <h1>PIZZA HUT RESRURANT AND BAR</h1>      
    <p>KATHMANDU,NEPAL</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li> <a href="index.php">Home</a></li>
        <li class="active"> <a href="menu.php">Menu</a></li>
        <li><a href="aboutus.php">About Us</a></li>
     
        <li><a href="contactus.php">Contact </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="view/login.php"><span class="glyphicon glyphicon-user"></span>Login To Your Account</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-power button"></span> LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">PIZZA</div>
        <div class="panel-body"><img src="image/12.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"> <a href="pizza.php">Click here for more description</a></div>
        <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Burger</div>
        <div class="panel-body"><img src="image/download.jpg" class="img-responsive" style="width:80%" alt="Image"></div>
        <div class="panel-footer"> <a href="burger.php".php">Click here for more description</a></div>
        <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">MO MO</div>
        <div class="panel-body"><img src="image/momo.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"> <a href="momo.php".php">Click here for more description</a></div>
        <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Chopsuey</div>
        <div class="panel-body"><img src="image/chopsy.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"> <a href="chopsy.php".php">Click here for more description</a></div>
        <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Dessert</div>
        <div class="panel-body"><img src="image/sweet.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"> <a href="dessert.php".php">Click here for more description</a></div>
        <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Bakery Items</div>
        <div class="panel-body"><img src="image/cakes.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"> <a href="cake.php".php">Click here for more description</a></div>
      <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>
      </div>
    </div>
	   <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Chowmine</div>
        <div class="panel-body"><img src="image/chowmin.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"> <a href="chowmin.php".php">Click here for more description</a></div>
        <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>
      </div>
    </div>
	   <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Chilly</div>
        <div class="panel-body"><img src="image/chilly.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"> <a href="chilly.php".php">Click here for more description</a></div>
        <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>
      </div>
    </div>
	 <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Soft Drinks</div>
        <div class="panel-body"><img src="image/colddrinks.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"> <a href="cold.php".php">Click here for more description</a></div>
        <div class="panel-footer"> <a href="view/order.php">Click here for your order</a></div>
      </div>
  </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Others</div>
        <div class="panel-body"><img src="image/other.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"> <a href="view/menuothers.php">Click here for menu</a></div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">

</footer>

</body>
</html>
