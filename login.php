<?php session_start();
if(isset($_SESSION["userid"])){
	header("location: ../index.php");
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seasonation MC</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
</head>
<body>
	<?php include "includes/header.inc.php"?>
    <main>
        <div class="pagetitle">
            <h1>Log in</h1>
        </div>
        
        <div class="textbox-container">
        <div class="loginsignupform">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <br>
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit">LOGIN</button>
            </form>
            <a href="signup.php">Don't have an account yet? Click here</a>
        </div>
        </div>
    </main>
</body>
</html>

