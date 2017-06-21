<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href=."style/css/bootstrap.min.css">
<script src="style/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style/style.css">
</head>
<body>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #92b1c1;
    width:100%;

}

.header li {
    float: left;
}

.header li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: inherit;
    padding-left:50px;
}
.header li a:hove
r {
    background-color: rgba(165, 156, 159, 0.55);
}
.search{

  padding-top: 10px;
  padding-left: 180px;
}
#searchbar{
  width:250px;
  border-radius: 4px;
  float: left;
  padding-left: 100px;
}


.btn-primary{
  padding-top:2px; 
  height: 30px;
  text-align: center;

}

</style>
</head>
<body>


<div class="header" >
	<ul>
		  <li><a href="index.php">eshopNepal</a></li>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="contacts.php">Contact</a></li>
		  <li><a href="#about">About</a></li>
			<li> 
		      <form method='post' action='searchengine.php' class="search">
			     <input type="text" name="asd" id="searchbar" autocomplete="off"  class="glyphicon glyphicon-search">
			     <input type="submit" name="search" value="search"  class="btn btn-primary" >
			    </form>
			</li>
       </div>
</ul>


</body>
</html>
