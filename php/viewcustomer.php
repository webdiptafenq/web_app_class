<?php

session_start();



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>West Coast Auto</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link  href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional theme -->
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet" >

    <link rel="stylesheet" type="text/css" href="../css/custom.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <a href="../php/logout.php" class="btn btn-default login-btn hidden-xs">Logout</a>
    <header>
      <div class="row">
        <div class="col-md-4">
          <img src="../images/west_coast_auto_logo.png" alt="West Coast Auto" class="logo img-responsive">
        </div>
        <div class="col-md-4 hidden-sm hidden-xs">
        </div>
        <div class="col-md-4 hidden-sm hidden-xs">
          <div class="contact-info">
            <p><span class="glyphicon glyphicon-earphone"></span>   Telephone: XX-XXXX-XXXX</p>
            <p><span class="glyphicon glyphicon-envelope"></span>   Email: contactus@westcoastauto.com</p>
            <p><span class="glyphicon glyphicon-map-marker"></span>  Address: XXX Something St,<br>Somewhere WA</p>
          </div>
        </div>

      </div>  
    </header>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="../index.html">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="../pages/about.html">About</a></li>
        <li><a href="used_vehicles.html">Used Vehicles</a></li>
        <li><a href="finance.html">Finance</a></li>
        <li><a href="testimonials.html">Testimonials</a></li>
        <li><a href="contact.html">Contact</a></li>
         <li><a href="../php/logout.php" class="hidden-sm hidden-md hidden-lg">Logout</a></li>
      </ul>
 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="row">
  <div class="col-xs-12">
    <article class="inner-main-content">
      <h1>View Customer</h1>
      <div class="row employee-login">
        <div class="col-xs-4">
          <a href="viewcustomer.php" class="btn btn-success">View Customer</a>
        </div>
        <div class="col-xs-4">
          <a href="addcustomer.php" class="btn btn-success">Add Customer</a>
        </div>
        <div class="col-xs-4">
          <a href="addsale.php" class="btn btn-success">Make Sale</a>
        </div>
      </div>
            <div class="row">
        <div class="col-md-12">
            <form role="form" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
              <label for="lastname">Last Name:</label>
              <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
            
            <div class="form-group">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
         </form>
      </div>
    </div>
      <div class="row">
        <div class="col-md-12">
<?php

if ($_POST) {
  
$lastname = "";
 
$lastname = $_POST['lastname'];
 

include('connect.php');

$query = "SELECT * FROM `customers` WHERE `Last_Name` LIKE '%$lastname%'";

$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
  

  echo "<div class='well'>";
  echo "<h2>Customer Number: <small>" . $row['Customer_ID'] . "</small></h2>";
  echo "<h2>First Name: <small>" . $row['First_Name'] . "</small></h2>";
  echo "<h2>Last Name: <small>" . $row['Last_Name'] . "</small></h2>";
  echo "<h2>Address: <small>" . $row['Address'] . "</small></h2>";
  echo "<h2>City: <small>" . $row['City'] . "</small></h2>";
  echo "<h2>State: <small>" . $row['State'] . "</small></h2>";
  echo "<h2>Postcode: <small>" . $row['Postcode'] . "</small></h2>";
  echo "<h2>Email_Address: <small>" . $row['Email_Address'] . "</small></h2>";
  echo "<h2>Phone_Number: <small>" . $row['Phone_Number'] . "</small></h2>";
  echo "</div>";

}

}



?>          


        </div>

      </div>

    </article>
  </div>
</div>

<footer class="navbar navbar-default">
  <div class="col-md-6">
    <p>Copyright Info</p>
  </div>
  <div class="col-md-6">
    <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.html">Home</a></li>
          <li><a href="privacy.html">Privacy Policy</a></li>
    </ul>
  </div>
</footer>






       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-2.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>