<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
     <head>
	 <meta charset="utf-8" />
	 <title>More</title>
	 <link rel="stylesheet" href="style1.css" type="text/css" />
	 <link rel="stylesheet" href ="styleinput.css" type="text/css" />
	 <style>
        .container {
            margin: 20px auto;
            max-width: 800px;
            background-color: rgba(34, 34, 34, 0.5);
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .column {
            flex: 1;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .info {
            color: blue;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .director-info {
            margin-left: auto;
			/* Pushes the director info column to the right */
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
			 </ul>
 
			<br><br>
			
		

			


<div class="container">
    <div class="column">
		<br>
	<?php
	
	if(isset($_GET['Movie_id'])){
		
		$Movie_id  = $_GET['Movie_id'];
		$sql = "SELECT * FROM genre 
				WHERE Movie_id ='$Movie_id'";
				
			
			
			$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($ro = $result->fetch_assoc()) {
        
		echo"<span style='color:Wheat; font-size:26px; font-weight:bold;'>Genre: </span><span>  </span><span style='color:white; font-size:24px;'>$ro[Genre]</span><br><br>";
    }
} 

}
?>	<br><br>
        <?php
        if(isset($_GET['A_id'])){
            $A_id  = $_GET['A_id'];
            $sql = "SELECT * FROM actors WHERE A_id ='$A_id'";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while($ro = $result->fetch_assoc()) {
                    echo "<div class='info'>";
                    echo "<h3 style='color:Wheat; font-size:20 px;display: inline; font-weight:bold;'>Actor name:</h3><p style='color:white; font-size:18px; display: inline; padding-left:10px;'>$ro[A_name]</p><br>
					<br><br>";
                    echo "<h3 style='color:Wheat; font-size:20 px;display: inline; font-weight:bold;'>Role:</h3><p style='color:white; font-size:18px; display: inline; padding-left:10px;'>$ro[Role]</p><br>
					<br><br>";
                    echo "<h3 style='color:Wheat; font-size:20 px;display: inline; font-weight:bold;'>Sex:</h3><p style='color:white; font-size:18px; display: inline; padding-left:10px;'>$ro[Sex]</p><br>
					<br><br>";
                    echo "<h3 style='color:Wheat; font-size:20 px;display: inline; font-weight:bold;'>DOB:</h3><p style='color:white; font-size:18px; display: inline; padding-left:10px;'>$ro[DOB]</p><br>
					<br><br>";
                    echo "</div>";
                }
            } else {
                echo "<p style='color:blue; font-size:24px;'>no info</p>";
            }
        }
        ?>
    </div>

    <div class="column director-info">
	<br>
<br>
<br>
<br>
<br>
<br>
<br>
        <?php
        if(isset($_GET['D_id'])){
            $D_id  = $_GET['D_id'];
            $sql = "SELECT * FROM directors WHERE D_id ='$D_id'";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while($ro = $result->fetch_assoc()) {
                    echo "<div class='info'>";
                    echo "<h3 style='color:Wheat; font-size:20 px;display: inline; font-weight:bold;' >Director by:</h3><p style='color:white; font-size:18px; display: inline; padding-left:10px;'><strong>$ro[D_name]</strong></p><br><br><br>";
                    echo "<h3 style='color:Wheat; font-size:20 px;display: inline; font-weight:bold;'>Sex:</h3><p style='color:white; font-size:18px; display: inline; padding-left:10px;'>$ro[Sex]</p><br><br><br>";
                    echo "<h3 style='color:Wheat; font-size:20 px;display: inline; font-weight:bold;'>DOB:</h3><p style='color:white; font-size:18px; display: inline; padding-left:10px;'>$ro[DOB]</p><br><br><br>";
                    echo "</div>";
                }
            } else {
                echo "<p style='color:blue; font-size:24px;'>no director</p>";
            }
        }
        ?>
    </div>
</div>
	</body>
</html>