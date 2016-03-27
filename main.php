
<html>
<head>
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script   src="https://code.jquery.com/jquery-2.2.2.min.js"   integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script>
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
 	 <div id="test"></div>
      </ul> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<script>
var url="http://192.168.1.88/hackaton/relay.php?command=";

function activateRelay()
{
$.get(url + "r")
           	.success( function(data){
                        $("#test").html(data);
		});
 }

function getTemperature(){
    $.get(url + "t")
	.success( function(data) { 
	    $("#temp").html(data + "C");
	})
}

function getHumidity(){
   $.get(url + "h")
	.success( function(data){
	    $("#hum").html(data + "%");
	)}
}

function switchTV(){
   $.get(url + "tv")
	.success( function(data){
	   $("#tv-button").hasClass("btn-danger") === true ? 
		$("#tv-button").removeClass("btn-danger").addClass("btn-success") : 
		$("#tv-button").removeClass("btn-success").addClass("btn-danger"); 
}
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
