<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="main-body">
<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">About</a></li>
      </ul>
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Sign up <i class="fa fa-user-plus"></i></a></li>
        <li><a href="#">Log in <i class="fa fa-user"></i></a></li>
       
      </ul> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id="cont3" class="container">
  <div class="row text-center">
    <div class="col-sm-6" class="jobs">
      <h2 class="header-default" class="jobs-header">Light</h2>
      <div class="cont-4-font">
      	<div id="state">
      		
      	</div>
      </div>
    </div>
    <div class="col-sm-6" class="jobs">
      <h2 class="header-default" class="jobs-header">TV</h2>
      <div class="cont-4-font">Status:
      <button type="button" id="btn-tv-off" class="btn btn-default">Off</button>
      </div>
    </div>
  </div>
</div>
<?php
$dir = 'sqlite:/var/db/arduino.db';
$db  = new PDO($dir) or die("cannot open the database");
$result = $db->query('select status FROM sensor1');
print $result;

$db = NULL;
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>