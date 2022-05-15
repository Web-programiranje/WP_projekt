<?php

if(isset($_POST["submit"]))
{
    $uname = $_POST["uname"];
    $password = $_POST["password"];
    
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($uname, $password);

    $login->loginUser();

    header ("Location: ../index.php?error=none");

}