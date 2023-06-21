<?php

if(isset($_POST["submit"])){

    //Grab data from POST
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $repeatpwd = $_POST["repeatpwd"];
    $email = $_POST["email"];

    // Instantiate SignupContr class

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    
    $signup = new SignupContr($uid, $pwd, $repeatpwd, $email);

    // Running error handlers and user signup
    $signup->signupUser();

    // Going back to front page
    header("location: ../index.php?error=none");
}