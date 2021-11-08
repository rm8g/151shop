`<?php


session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_SESSION['fname'] = $_REQUEST['fname'];
    $_SESSION['lname'] = $_REQUEST['lname'];
    $_SESSION['email'] = $_REQUEST['email'];
    $_SESSION['pword'] = $_REQUEST['pword'];

    $fname = $_SESSION['geburtsdatum'];
    $lname = $_SESSION['wohnort'];
    $email = $_SESSION['beruf'];


    header("location: ./summary.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Junglepedia</title>
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
        <div class="row">
            <div class="col-sm-5">
                <h1 class="subpagestitle"><a href="./landingPage.php">Junglepedia</a></h1>
            </div>
           <div class="col-sm-7">
                <ul class="list-inline navBarSubPage">
                    <li class="list-inline-item">plants</li>
                    <li class="list-inline-item">infos</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <hr>
                </hr>
            </div>
            <div class="col-sm-2">
                <p class="titleBox">Register</p>
            </div>
            <div class="col-sm-5">
                <hr>
                </hr>
            </div>
        </div>

            <form method="post">
                <label for="fname">Firstname*</label><br>
                <input type="text" id="fname" name="fname" required><br>
                <label for="lname">Lastname*</label><br>
                <input type="text" id="lname" name="lname" required><br>
                <label for="email">Email*</label><br>
                <input type="text" id="email" name="email" required><br>
                <label for="pword">Password*</label><br>
                <input type="text" id="pword" name="pword" required><br>
                <br>
                <input type="submit" value="Submit">
            </form>
            <button><a href="../index.php">Quit</button></a>

        <br> <br> <br>
        <div class="footer-basic">
            <footer>
                <ul class="list-inline footer">
                    <li class="list-inline-item"><a href="../index.php">Home</a></li>
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Policy</a></li>
                </ul>
                <p class="copyright footer">Company Name © 2020</p>
            </footer>
        </div>
    </div>

</body>

</html>