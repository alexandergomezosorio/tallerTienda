<?php
include("../models/DB.php");

if (isset($_post["boton"])) {
    
    $firstName=$_post["first name"];
    $lastName = $_post["last name"];
    $email= $_post["email"];
    $age = $_post["age"];
    $comments = $_post["comments"];

    echo($firstName." ".$lastName." ".$email." ".$age." ");
}

?>