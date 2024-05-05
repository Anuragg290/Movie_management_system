<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
     <head>
	 <meta charset="utf-8" />
	 <title>Sales</title>
	 <link rel="stylesheet" href="style1.css" type="text/css" />

	 <style>
        .add-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .add-button:hover {
            background-color: #45a049;
            transform: scale(1.1);
        }
    </style>

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
					<th><h1>Movie_id</h1></th>
					<th><h1>Total Income</h1></th>
					
				</tr>
				<br>
<?php
	$sql = "SELECT * FROM sales";
	$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
		echo"<tr><td>".$row['Movie_id']."</td><td>".$row['TotalIncome']."</td></tr>";
    }
} 
else {
    echo "0 results";
}
?>
			</table>
            <br><br>
            <div style="text-align: center;">
                <a href="addSales.php" class="add-button">ADD+</a>
            </div>
	     </body>
</html>
