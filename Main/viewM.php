<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>SARCO</title>
    <link rel="stylesheet" href="style1.css" type="text/css" />
    
</head>
<body>
<div id="gradient"></div>
<header>
    <h1><a href="../mini/index.html">SaRco</a></h1>
</header>
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
<br><br><br><br>
<table class="tab">
    <tr>
        <th>M_id</th>
        <th>Title</th>
        <th>Year</th>
        <th>Company</th>
        <th>Rating</th>
        <th>Action</th>
    </tr>

    <?php
    $servername = "localhost";
    $username ="root";
    $password = "";
    $db = "moviedb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "CALL `getMovie`()";
    $result = $conn->query($sql);

    if ($result) {
        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>$row[Movie_id]</td><td><a href='cast.php?Movie_id=$row[Movie_id]&A_id=$row[A_id]&D_id=$row[D_id]'><span>$row[Title]</span></a></td><td>$row[Year]</td><td>$row[Company]</td><td>$row[Rating]</td><td><a href='editM.php?Movie_id=$row[Movie_id]&Title=$row[Title]&Year=$row[Year]&Company=$row[Company]&Rating=$row[Rating]&D_id=$row[D_id]&A_id=$row[A_id]'><button class='btn'><i class='fa fa-cog fa-spin'></i> Edit</button></a> <a href='deleteM.php?Movie_id=$row[Movie_id]'><button class='btn'><i class='fa fa-trash'></i> Delete</button></a></td></tr>";
            }
        } else {
            echo "<tr><td colspan='6'>0 results</td></tr>";
        }
    } else {
        echo "Error executing stored procedure: " . $conn->error;
    }

    $conn->close();
    ?>
</table>
</body>
</html>
