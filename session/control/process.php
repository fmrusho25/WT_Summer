<?php

session_start();



$nameErr="";
$name1Err="";
$name2Err="";

$haserror=0;

$designationErr="";
$vvv ="";
$emailErr="";
$passwordSave="";
$passwordErr="";

if(isset($_POST["next"]))
{
    echo "<h3>Previous Submission Informations....</h3> <br> ";
$fname     =$_REQUEST["fname"];
$lname     =$_REQUEST["lname"];

if($fname="" || $lname=="")
{
    $nameErr= "Both First Name and Last Name Required. <br>";
    $haserror=1;
}
else
{
if(is_numeric($_REQUEST["fname"]))
{
    $name1Err=  "First name  should not contain numeric value.<br>";
    $haserror=1;

    if(is_numeric($_REQUEST["lname"]))
    {
        $name2Err=  "Last Name should not contain numeric value.<br>";
        $haserror=1;
    }
    else
    {
        $_SESSION["lname"] =$lname;
        echo "Last Name           : ", $lname ,"<br>" ;
    }
}
else
{
    $fname     =$_REQUEST["fname"];
    $lname     =$_REQUEST["lname"];

    $_SESSION["fname"] =$fname;
    echo "First Name          : ", $fname ,"<br>" ;
    if(is_numeric($_REQUEST["lname"]))
    {
        $name2Err= "Last Name should not contain numeric value.<br>";
        $haserror=1;
    }
    else
    {
        $_SESSION["lname"] =$lname;
        echo "Last Name           : ", $lname ,"<br>" ;
    }
}
}
if($haserror==0)
{
    header("Location: ../view/page.php");
}


}
?>