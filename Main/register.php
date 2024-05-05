<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: #1a1a1a; /* Dark background color */
        
        }
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0; /* Adjusted z-index */
        }
        .video-background video {
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .container {
            margin-top: 20vh; 
            background-color: transparent; 
        }
        .login-container {
            position: fixed;
            z-index: 1;
            padding: 40px;
            margin-top: 7vh; /* Adjusted to center vertically */
            background-color: rgba(255, 255, 255, 0.1); /* Semi-transparent white background */
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Soft shadow effect */
            color: #fff; /* Text color */
            backdrop-filter: blur(10px); /* Blur effect for transparency */
        }
        h2 {
            color: #fff; /* Heading color */
        }
        .form-group label {
            color: #fff;
            transition: color 0.3s ease-in-out;
        }
        .form-group:hover label {
            color: pink; /* Change label color on hover */
        }
        .form-control {
            background-color: transparent !important; /* Keep input boxes transparent */
            border: none;
            color: #fff;
            border-bottom: 1px solid #fff;
            transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .form-control:focus,
        .form-control:hover {
            border-color: #ff4500;
            box-shadow: 0 0 10px rgba(255, 69, 0, 0.5); /* Shadow effect on hover/focus */
        }
        button[type="submit"] {
            background-color: #ff4500; /* Change button color */
            border-color: #ff4500;
            color: #fff; /* Button text color */
            transition: background-color 0.3s ease-in-out;
        }
        button[type="submit"]:hover {
            background-color: #ff6347;
            border-color: #ff6347;
        }
        button[type="submit"]:focus,
        button[type="submit"].focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 69, 0, 0.5);
        }
    </style>
</head>
<body>
    <div class="video-background">
        <video autoplay muted loop>
            <source src="register.mp4" type="video/mp4">
        </video>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 login-container">
                <h2 class="text-center mb-4">Register New User 😊</h2>
                <form method="post" action="process_register.php">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
