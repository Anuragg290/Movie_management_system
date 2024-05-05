<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Add Review</title>
    <link rel="stylesheet" href="style1.css" type="text/css" />
    <link rel="stylesheet" href="styleinput.css" type="text/css" />
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
    </ul>

    <br><br><br>
    
    <div class="container">
        <form method="post">
            <div class="row">
                <div class="col-25">
                    <label class='label'>Movie ID</label> 
                </div>
                <div class="col-75">
                    <input type="text" name="Movie_id"><br/>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label class='label'>User Name</label> 
                </div>
                <div class="col-75">
                    <input type="text" name="user_name"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label class='label'>Comment</label>
                </div>
                <div class="col-75">
                    <textarea name="Comment" rows="4" cols="50"></textarea><br>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label class='label'>Rating</label>
                </div>
                <div class="col-75">
                    <input type="number" name="Rating" min="0" max="10"><br>
                </div>
            </div>
            <input type="submit" name="submit" value="Insert" class="btnid">
        </form><br><br>
    </div>

</body>
</html>

<?php
    ob_start();
    $con = mysqli_connect("localhost","root","","moviedb");

    // Check connection
    if(mysqli_connect_errno()){
        echo 'Failed to connect' . mysqli_connect_error();
    }

    if (isset($_POST['submit'])) { 
        // Escape user inputs for security
        $Movie_id = mysqli_real_escape_string($con, $_POST['Movie_id']);
        $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
        $Comment = mysqli_real_escape_string($con, $_POST['Comment']);
        $Rating = mysqli_real_escape_string($con, $_POST['Rating']);
        
        // Attempt insert query execution
        $sql = "INSERT INTO review (Movie_id, user_name, Comment) VALUES ('$Movie_id', '$user_name', '$Comment')";
        
        if(mysqli_query($con, $sql)){
            echo "Records inserted successfully.";
            header("refresh:2 url=review.php");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
    }
    ob_end_flush();
    ?>