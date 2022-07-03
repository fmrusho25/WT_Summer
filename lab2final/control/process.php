<?php

include("..model/db1.php");

$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];

if ($fname = "" || $lname == "") 
{
    echo "Both First Name and Last Name Required. <br>";
}
else 
{
    if (is_numeric($_REQUEST["fname"])) 
{
        echo "First name  should not contain numeric value.<br>";
        if (is_numeric($_REQUEST["lname"])) {
            echo "Last Name should not contain numeric value.<br>";
        }
        else {
            echo "Last Name           : ", $lname, "<br>";
        }
    }
    else 
{
        $fname = $_REQUEST["fname"];
        $lname = $_REQUEST["lname"];

        echo "First Name          : ", $fname, "<br>";
        if (is_numeric($_REQUEST["lname"])) {
            echo "Last Name should not contain numeric value.<br>";
        }
        else {
            echo "Last Name           : ", $lname, "<br>";
        }
    }
}

if (isset($_REQUEST["designation"])) 
{
    $designation = $_REQUEST["designation"];

    //echo "Designation must be selected. <br>";
    if ($designation == "Junior Programmer") {

        echo "Designation     :", $designation, "<br>";
    }
    if ($designation == "Senior Programmer") {

        echo "Designation     :", $designation, "<br>";
    }
    if ($designation == "Project Lead") {

        echo "Designation     :", $designation, "<br>";
    }

}
else 
{
    echo "Designation must be selected. <br>";
}


$email = $_REQUEST["email"];
if ($email == "") 
{
    echo "Email should not be empty.<br>";
}
else 
{
    echo "Email             :", $email, "<br>";
}

$password = $_REQUEST["password"];
if (strlen($password) < 6) 
{
    echo "Password should be more than 6 characters. <br>";
}
else 
{
    echo "Password Successfully Saved...!!";
}


if (isset($_POST["submit"])) 
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $age = $_POST["age"];
    $designation = $_POST["designation"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $filename = $_POST["filename"];


    $mydb = new db1();
    $myconn = $mydb->openCon();
    $mydb->insertUser($fname, $lname, $age, "reg", $filename, $password, $email, $designation, $myconn);


}





?>