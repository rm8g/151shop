<?php

$servername = "localhost";
$username = "michatartak";
$password = "12345";

// Create connection
$conn = new mysqli($servername, $username, $password);

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
//$result = $conn->query($sql) ->fetch_all(MYSQLI_ASSOC);

//echo " " . $result["name"]. " - Price: " . $result["price"]. ".- ";

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
                <h1 class="title">Junglepedia</h1>
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
            <div class="col-sm-4">
		<?=" " . $row[0]["name"]. " : Price: " . $row[0]["price"]. ".- ";?>
                <img class="firstPagePictures" src="../src/plant1.jfif">
                <button class="btn"><a href=" Pay.php">Buy</button></a>
            </div>
            <div class="col-sm-4">
		<?=" " . $row[1]["name"]. " : Price: " . $row[1]["price"]. ".- ";?>
                <img class="firstPagePictures" src="../src/plant2.jfif">
                <button class="btn"><a href=" Pay.php">Buy</button></a>
            </div>
            <div class="col-sm-4">
		<?=" " . $row[2]["name"]. " : Price: " . $row[2]["price"]. ".- ";?>
                <img class="firstPagePictures" src="../src/plant3.jfif">
                <button class="btn"><a href=" Pay.php">Buy</button></a>
            </div>
        </div>
        <div class="row secondRow">
            <div class="col-sm-4">
		<?=" " . $row[3]["name"]. " : Price: " . $row[3]["price"]. ".- ";?>
                <img class="firstPagePictures" src="../src/plant4.jfif">
                <button class="btn"><a href=" Pay.php">Buy</button></a>
            </div>
            <div class="col-sm-4">
		<?=" " . $row[4]["name"]. " : Price: " . $row[4]["price"]. ".- ";?>
                <img class="firstPagePictures" src="../src/plant5.jfif">
                <button class="btn"><a href=" Pay.php">Buy</button></a>
            </div>
            <div class="col-sm-4">
		<?=" " . $row[5]["name"]. " : Price: " . $row[5]["price"]. ".- ";?>
                <img class="firstPagePictures" src="../src/plant6.jfif">
                <button class="btn"><a href=" Pay.php">Buy</button></a>
            </div>
        </div>
        <div class="row secondRow">
            <div class="col-sm-4">
		<?=" " . $row[6]["name"]. " : Price: " . $row[6]["price"]. ".- ";?>
                <img class="firstPagePictures" src="../src/plant7.jfif">
                <button class="btn"><a href=" Pay.php">Buy</button></a>
            </div>
            <div class="col-sm-4">
		<?=" " . $row[7]["name"]. " : Price: " . $row[7]["price"]. ".- ";?>
                <img class="firstPagePictures" src="../src/plant8.jfif">
                <button class="btn"><a href=" Pay.php">Buy</button></a>
            </div>
            <div class="col-sm-4">
		<?=" " . $row[8]["name"]. " : Price: " . $row[8]["price"]. ".- ";?>
                <img class="firstPagePictures" src="../src/plant9.jfif">
                <button class="btn"><a href="Pay.php">Buy</button></a>
            </div>
        </div>
        <div class="row secondRow">
            <div class="col-sm-4">
		<?=" " . $row[9]["name"]. " : Price: " . $row[9]["price"]. ".- ";?>
                <img class="firstPagePictures" src="../src/plant10.jfif">
                <button class="btn"><a href=" Pay.php">Buy</button></a>
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