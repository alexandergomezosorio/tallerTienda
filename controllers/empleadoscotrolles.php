<?php
include("../models/DB.php");

if (isset($_post["understood"])) {
    
    $firstName=$_post["first name"];
    $lastName = $_post["last name"];
    $email= $_post["email"];
    $age = $_post["age"];
    $comments = $_post["comments"];

    echo($firstName." ".$lastName." ".$email." ".$age." ");
    $dataBase = new $dataBase();
    $dataBase -> conectWithDB();
}else{
    echo ("No deberias estar aca");
}

?>