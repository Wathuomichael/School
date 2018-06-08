<!DOCTYPE html>
<html>
<head>
	<title>School Report</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			background-image: url(class.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		.but{
			background-color: white;
			border-radius: 50px;
			width: 100px;
			padding: 10px;
			margin-left: 150px;
		}
		input{
			border-radius: 50px;
			width: 20%;
			padding: 20px;
		}
		.but:hover{
			background-color: green;
		}
		.nme{
			margin-left: 200px;
		}
		.bus{
			margin-left: 200px;
		}
		.bat{
			margin-left: 50px;
			background-color: white;
			border-radius: 50px;
			width: 100px;
			padding: 10px;
		}
		.bat:hover{
			background-color: red;
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
		form{
			margin-left: 200px;
		}
	</style>
</head>
<body>
	<div class="nv">
		<a href="home.php">Home</a>
		<a href="" class="activ">Student Marks</a>
		<a href="aboutus.php">About us</a>
	</div>
	<form action="output.php" method="POST">
		<label class="nme">Name</label><br>
		<input type="text" name="nme" placeholder="Enter Name here" required="" class="nme"><br><br>
		<label class="mat">Math</label>
		<input type="number" name="mat" placeholder="Enter Math score" required="" class="mat">
		<label class="eng">Eng</label>
		<input type="number" name="eng" placeholder="Enter Eng score" required="" class="eng">
		<label class="kis">Kis</label>
		<input type="number" name="kis" placeholder="Enter Kis score" required="" class="kis"><br><br>
		<label class="phy">Phy</label>
		<input type="number" name="phy" placeholder="Enter Phy score" required="" class="phy">
		<label>Comp</label>
		<input type="number" name="comp" placeholder="Enter Comp score" required="">
		<label class="geo">Geo</label>
		<input type="number" name="geo" placeholder="Enter Geo score" required="" class="geo"><br><br>
		<label class="bus">Bus</label><br>
		<input type="number" name="bus" placeholder="Enter Bus score" required="" class="bus"><br><br>
		<input type="submit" value="Submit" class="but"><input type="reset" value="Reset" class="bat">  
	</form>
</body>
</html>