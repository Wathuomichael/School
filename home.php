<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		body{
			background-image: url(class.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		a{
			text-decoration: none;
			font-size: 30px;
			color: black;
		}
		.nv{
			margin-left: 300px;
		}
		a:hover{
			background-color: lightgreen;
			text-decoration: none;
			color: black;
		}
		.activ{
			border: solid;
		}
		h3{
			text-align: center;
			font-size: 50px;
		}
  	</style>
</head>
<body>
	<div class="nv">
		<a href="" class="activ">Home</a>
		<a href="input.php">Student Marks</a>
		<a href="aboutus.php">About us</a>
	</div>
	<h3>Precinct School</h3>
	<div class="container">
		<div id="git" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#git" data-slide-to="0" class="active"></li>
				<li data-target="#git" data-slide-to="1"></li>
				<li data-target="#git" data-slide-to="2"></li>
				<li data-target="#git" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img src="field.jpg" width="100%" height="400px">
				</div>
				<div class="item">
					<img src="bus.jpg" width="100%" height="400px">
				</div>
				<div class="item">
					<img src="class.jpg" width="100%" height="400px">
				</div>
				<div class="item">
					<img src="lib.jpg" width="100%" height="400px">
				</div>
			</div>
			<a href="#git" class="left carousel-control" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only"></span>
			</a>
			<a href="#git" class="right carousel-control" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only"></span>
			</a>
		</div>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.384987134765!2d36.800743!3d-1.264793!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fd3e7ccd9e69154!2seMobilis+Mobile+Technology+Training+Institute!5e0!3m2!1sen!2ske!4v1528442953964" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</body>
</html>