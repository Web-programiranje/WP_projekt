<?php

if(isset($_POST["submit"]))
{
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uname, $email, $password, $cpassword);

    $signup->signupUser();

    header ("Location: ../index.php?error=none");

}