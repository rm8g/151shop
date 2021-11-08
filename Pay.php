<?php

$servername = "localhost";
$username = "michatartak";
$password = "12345";
$dbname = "michatartak_webshop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    session_start ();
    session_unset ();
    session_destroy ();
    ob_end_flush ();
    header("location: ../index.php");
}

$sql = "SELECT name, price FROM plants";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jungleshop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="title"><a href="index.php">Jungleshop</a></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 firstCol">
                <p class="navBar">plants</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <hr>
                </hr>
            </div>
            <div class="col-sm-2">
                <p class="titleBox">   OUR JUNGLE</p>
            </div>
            <div class="col-sm-5">
                <hr>
                </hr>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row firstRow">
            <div class="col-sm-12">
                <img class="firstPagePictures" src="../src/deMichi.png">
            </div>
        </div>
        <br> <br> <br>
	<div class="donation">
		<p>Donate money to +41 78 636 25 10 via twint</p> 
		<a href="https://www.twint.ch/en/download/">Download twint now</a>
	</div>
	<br><br>
        <div class="footer-basic">
            <footer>
                <ul class="list-inline footer">
                    <li class="list-inline-item"><a href="#">Home</a></li>
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Policy</a></li>
                    <form method="POST">
                        <button type="submit" value="Submit">Sign out</button>
                    </form>
                </ul>
                <p class="copyright footer">Company Name © 2021</p>
            </footer>
        </div>
    </div>

</body>

</html>