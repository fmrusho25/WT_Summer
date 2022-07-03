<?php

include("../model/db.php");

if (isset($_POST["submit"])) 
{
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];


    $mydb = new db();
    $myconn = $mydb->openCon();
    $mydb->insertUser($name, $username, $password, "user", $myconn);


}

?>