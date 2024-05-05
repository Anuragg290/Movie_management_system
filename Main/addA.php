<!DOCTYPE html>
<html>
     <head>
	 <meta charset="utf-8" />
	 <title>Add actor</title>
	 <link rel="stylesheet" href="style1.css" type="text/css" />
	 <link rel="stylesheet" href ="styleinput.css" type="text/css" />
	 

	 </head>
	     <body>
		 <div id="gradient"></div>
	         <header>
		      
			 <h1><a href="../mini/index.html">SaRco</a></h1>
             </header></br>
			 <ul>
			   <li><a>MOVIES</a>
				   <ul>
					<li><a href="viewM.php">View all movies</a></li>
					<li><a href="addM.php">Add a movie</a></li>
				   </ul>
			   </li>
			   <li><a>DIRECTOR</a>
					<ul>
					<li><a href="viewD.php">View all directors</a></li>
					<li><a href="addD.php">Add a director</a></li>
					</ul>
			   </li>
			   <li><a>ACTOR</a>
					<ul>
					<li><a href="viewA.php">View all actors</a></li>
					<li><a href="addA.php">Add an actor</a></li>
					</ul>
			   </li>
			   <li><a href="genre.php">GENRE</a></li>
			   <li><a href="sales.php">SALES</a></li>
			 </ul>

			<br><br><br>
			
		<div class="container">
			<form method="post">
			  <div class="row">
			    <div class="col-25">
				<label class='label'>ID</label> 
				</div>
				 <div class="col-75">
				<input id='name' type="varchar" name="A_id"><br/>
			  </div>
			  </div>
			  <div class="row">
			    <div class="col-25">
				<label class='label'>Name</label> 
				 </div>
				 <div class="col-75">
				<input type="char" name="A_name"><br>
				  </div>
				 </div>
				 <div class="row">
			    <div class="col-25">
				<label class='label'>Role</label>
				</div>
				 <div class="col-75">
				<input type="char" name="Role"><br>
				 </div>
				 </div>
				 <div class="row">
			    <div class="col-25">
				<label class='label'>Sex</label><br>
				</div>
				<br>
				 <div class="col-75">
				<input  type="radio" name="Sex" value="male"><label>Male</label>
          		<input  type="radio" name="Sex" value="female"><label>Female</label><br>
				 </div>
				 </div>
				 <br>
				 <div class="row">
			    <div class="col-25">
				<label class='label'>DOB</label>
			
				</div>
				 
				<input type="date" name="DOB"><br>
				
				 </div>
				 <br>
				
				<input type="submit" name="submit" value="Insert" class="btnid">
			</form><br>
			</div>
	     </body>
</html>

<?php
$con = mysqli_connect("localhost","root","","moviedb");

//test
if(mysqli_connect_errno()){
	echo'Failed to connect'.mysqli_connect_error();
}
if (isset($_POST['submit'])) 
{ 
// Instructions if $_POST['value'] exist 

	$id = mysqli_real_escape_string($con, $_POST['A_id']);
	$name = mysqli_real_escape_string($con, $_POST['A_name']);
	$Role = mysqli_real_escape_string($con, $_POST['Role']);
	$Sex = mysqli_real_escape_string($con, $_POST['Sex']);
	$DOB = mysqli_real_escape_string($con, $_POST['DOB']);
	
	$sql = "INSERT INTO actors (A_id,A_name,Role,Sex,DOB) VALUES ('$id','$name','$Role','$Sex','$DOB')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Not inserted';
	}
	else
	{
		echo'1 row inserted';
	}
	header("refresh:2 url=viewA.php");
}
?>
