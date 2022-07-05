<?php
session_start();
   
if(isset($_POST["submit"]))
{ 
    $rname = $_POST["rname"];
    $location = $_POST["location"];
    $review = $_POST["review"];
    $image = $_POST["image"];
    
    include "../classes/dbh.classes.php";
    include "../classes/recommend.classes.php";
    include "../classes/recommend-contr.classes.php";

    $recommend = new RecommendContr($_SESSION["useruname"], $rname, $location, $review, $image);

    $recommend->addRecommendation();

    header ("Location: ../userrecom.php?error=none");

}