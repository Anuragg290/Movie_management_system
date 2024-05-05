<!DOCTYPE html>
<html>
     <head>
	 <meta charset="utf-8" />
	 <title>Add movie</title>
	 <link rel="stylesheet" href="style1.css" type="text/css" />
	 <link rel="stylesheet" href ="styleinput.css" type="text/css" />
	 

	 </head>
	     <body>
		 <div id="gradient"></div>
	         <header>
		      
			 <h1><a href="../mini/index.html" >SaRco</a></h1>
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
			   <li><a href="review.php">REVIEWS</a></li>
			 </ul>

			<br><br><br>
			



		
		<div class="container">
			  <form method="post">
			  <div class="row">
			    <div class="col-25">
				<label class='label'>ID</label> 
				</div>
				 <div class="col-75">
				<input id='name' type="varchar" name="Movie_id"><br/>
			  </div>
			  </div>
			  <div class="row">
			    <div class="col-25">
				<label class='label'>Title</label> 
				 </div>
				 <div class="col-75">
				<input type="char" name="Title"><br>
				  </div>
				 </div>
				 <div class="row">
			    <div class="col-25">
				<label class='label'>Year</label>
				</div>
				 <div class="col-75">
				<input type="year" name="Year"><br>
				 </div>
				 </div>
				 <div class="row">
			    <div class="col-25">
				<label class='label'>Company</label><br>
				</div>
				 <div class="col-75">
				<input type="char" name="Company"><br>
				 </div>
				 </div>
				 <div class="row">
			    <div class="col-25">
				<label class='label'>Rating</label>
				</div>
				 <div class="col-75">
				<input type="float" name="Rating"><br>
				 </div>
				 </div>
				 <div class="row">
			    <div class="col-25">
				<label class='label'>Genre</label>
				</div>
				 <div class="col-75">
				<input type="char" name="Genre"><br>
				 </div>
				 </div>
				  <div class="row">
			    <div class="col-25">
				<label class='label'>D_id</label>
				</div>
				 <div class="col-75">
				<input type="varchar" name="D_id"><br>
				 </div>
				 </div>
				  <div class="row">
			    <div class="col-25">
				<label class='label'>A_id</label>
				</div>
				 <div class="col-75">
				<input type="varchar" name="A_id"><br>
				 </div>
				 </div>
				 <br>
				<input type="submit" name="submit" value="Insert" class="btnid">
			    </form><br><br>
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

	$id = mysqli_real_escape_string($con, $_POST['Movie_id']);
	$name = mysqli_real_escape_string($con, $_POST['Title']);
	$year = mysqli_real_escape_string($con, $_POST['Year']);
	$Company = mysqli_real_escape_string($con, $_POST['Company']);
	$Rating = mysqli_real_escape_string($con, $_POST['Rating']);
	$Genre = mysqli_real_escape_string($con, $_POST['Genre']);
	$D_id = mysqli_real_escape_string($con, $_POST['D_id']);
	$A_id = mysqli_real_escape_string($con, $_POST['A_id']);
	
	
	$sql = "INSERT INTO movie (Movie_id,Title,Year,Company,Rating,D_id,A_id) VALUES ('$id','$name','$year','$Company','$Rating','$D_id','$A_id')";
	$query=mysqli_query($con,$sql) or die(mysqli_error($con));
	
	if($query==1){
		$ins = "INSERT INTO genre (Genre,Movie_id) VALUES ('$Genre','$id')";
		
		$que = mysqli_query($con,$ins) or die(mysqli_error($con));
			if($query==1){
				echo "<p style= 'color:#fff; font-size:20px;'>1 row inserted</p>";
			}
	}
	
	header("refresh:1 url=viewM.php");
}
?>
