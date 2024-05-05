<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
     <head>
	 <meta charset="utf-8" />
	 <title>Genre</title>
	 <link rel="stylesheet" href="style1.css" type="text/css" />

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
			   <li><a href="review.php">REVIEW</a></li>
			 </ul>
			<br><br><br><br>
			<table class="tab">
				<tr>
					<th><h1>Movie</h1></th>
					<th><h1>Genre</h1></th>
				</tr>
<?php
	$sql = "SELECT Title,Genre FROM genre,movie WHERE genre.Movie_id = movie.Movie_id";
	$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
		echo"<tr><td>".$row['Title']."</td><td>".$row['Genre']."</td></tr>";
    }
} 
else {
    echo "0 results";
}

?>
			</table>
	     </body>
</html>