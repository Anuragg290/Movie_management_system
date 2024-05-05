<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>SARCO</title>
    <link rel="stylesheet" href="style1.css" type="text/css" />
    <link rel="stylesheet" href ="styleinput.css" type="text/css" />
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

<header>
    <h1><a href="../mini/index.html">SARCO</a></h1>
</header>
<ul>
    <li><a>Movies</a>
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
    <li><a href="review.php">REVIEWS</a>
    </li>
</ul>
<br><br><br><br>
<table class="tab">
    <tr>
        <th>User Name</th>
        <th>Comment</th>
       
    </tr>
    <?php
    $sql = "SELECT r.user_name, r.Comment, m.Rating FROM review r INNER JOIN movie m ON r.Movie_id = m.Movie_id ORDER BY m.Rating DESC";
    $result = $con->query($sql);

    if ($result === false) {
        echo "Error: " . $sql . "<br>" . $con->error;
    } elseif ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $userName = $row['user_name'];
            $comment = $row['Comment'];
            $rating = $row['Rating'];
            
            if(empty($userName) || empty($comment) || empty($rating)) {
                continue;
            }
            
            echo "<tr><td>".$userName."</td><td>".$comment."</td><td>";
        }
    } else {
        echo "<tr><td colspan='3'>0 results</td></tr>";
    }
    ?>

</table>

<br><br>
           <div style="text-align: center;">
                <a href="addReview.php" class="add-button">ADD+</a>
            </div>
</body>
</html>
