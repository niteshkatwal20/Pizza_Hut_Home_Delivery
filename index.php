



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
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
    
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contactus.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="view/login.php"><span class="glyphicon glyphicon-user"></span>Login To Your Account</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-shopping-cart"></span>LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">

    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
   Design Specification

3.1. Introduction 
	Design is the process of applying software solution to one or more problems.  The main components of software design are the software requirements analysis (SRA). SRA is a part of the software expansion process that lists conditions used in software engineering. Designing of software is a method to convert user necessities into some apposite form, which helps the programmer in software coding and operation to define the architecture and interface of the system. The design procedure is an order of phases which assists the designer to describe all the aspects of the software for designing. It also focusses on interface of system so it is good-looking, easy to use, efficient and reliable.

UML (Unified Modeling Language) is the standard representation that helps in analysis, design and implementation. It can be used to modeling the real world object. It can be used as per requirement of system since it is language independent and help to understand function and behavior of the system.  Star UML is the tool for generating the UML diagrams which is required in the development of the system. 
There are various form of UML diagram and it is significant to distinguish among UML models so the type of UML diagram are as follows: 

3.2. Structural Model

Structural modeling is a statistical analysis technique that is used to analyze structural relationships. This method is the combination of factor analysis and multiple regression analysis, and it is used to analyze the structural relationship between measured variables and suppressed concepts.
The widely used for structural model is:
	Class diagram:
Class diagram is the logical structure of the software or system. In class diagram there contains classes, attribute and the behavior and the relation between them. The class diagram is the main building block of object-oriented modelling. It is used both for general conceptual modelling of the systematics of the application, and for detailed modelling translating the models into programming code. Class diagrams can also be used for data modeling. The classes in a class diagram represent both the main elements, interactions in the application, and the classes to be programmed.
In the design of a system, a number of classes are identified and grouped together in a class diagram that helps to determine the static relations between them. With detailed modelling, the classes of the conceptual design are often split into a number of subclasses.

3.3. Behavioral Model
	Behavioral model is the UML diagram which describes the features of the system and also describing the relation between the models of the system. This model offers to deal with the information about the data processing and management of the system.
The widely used Behavioral model are:
	Activity Diagram:
Activity diagram is another important diagram in UML to describe the dynamic aspects of the system. It is basically a flowchart to represent the flow from one activity to another activity. The activity can be described as an operation of the system. The control flow is drawn from one operation to another. 
Activity diagrams are shown below:

 
Fig: Admin activity diagram
 
Fig: User activity diagram


	Sequence Diagram:
It is the diagram which describes the relation among the classes which can also be called as the event diagram which is the better way of visualize & validate the various runtime in the system. 


Database Model:

	ER-Diagram:
It is the logical structure of a database that includes relationships and constraints which determine how data is store and access. MySQL was used and Xampp as server for connection. All the tables in database like login, registration, product, type are stored in database. To illustrate the database model of system Entity Relationship model is designed that shows the entity and relation of the data.


	Data dictionary:

 It is a gathering of names, descriptions and attributes about data essentials used in a database. It defines purposes of data within the situation of a project which provide supervision while clarification and illustration. It also gives metadata about data elements. The metadata involved in a data dictionary can be used to discovery project scope and features of data elements, as well as the rules about where they can be used and are appropriate.

Conclusion
	Although design stage is significant portion of then software development which describes the design and interface of the system. Design phase contain significant procedures such as Structural & Behavioral Model. The diagram like Sequence, Activity, Class Diagram and ER-Diagram was drawn for the representation of the system. 


     
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  



</footer>

</body>
</html>
