<?php

$nameErr="";
$name1Err="";
$name2Err="";
$designationErr="";
$vvv ="";
$emailErr="";
$passwordSave="";
$passwordErr="";

if(isset($_POST["submit"]))
{
    echo "<h3>Previous Submission Informations....</h3> <br> ";
$fname     =$_REQUEST["fname"];
$lname     =$_REQUEST["lname"];

if($fname="" || $lname=="")
{
    $nameErr= "Both First Name and Last Name Required. <br>";
}
else
{
if(is_numeric($_REQUEST["fname"]))
{
    $name1Err=  "First name  should not contain numeric value.<br>";

    if(is_numeric($_REQUEST["lname"]))
    {
        $name2Err=  "Last Name should not contain numeric value.<br>";
    }
    else
    {
        echo "Last Name           : ", $lname ,"<br>" ;
    }
}
else
{
    $fname     =$_REQUEST["fname"];
    $lname     =$_REQUEST["lname"];

    echo "First Name          : ", $fname ,"<br>" ;
    if(is_numeric($_REQUEST["lname"]))
    {
        $name2Err= "Last Name should not contain numeric value.<br>";
    }
    else
    {
        echo "Last Name           : ", $lname ,"<br>" ;
    }
}
}

if(isset($_REQUEST["designation"]))
{
    $designation = $_REQUEST["designation"];
    
    //echo "Designation must be selected. <br>";
    if($designation =="Junior Programmer")
    {
        
        echo "Designation     :", $designation, "<br>";
    }
    if($designation =="Senior Programmer")
    { 
        
        echo "Designation     :", $designation, "<br>";
    }
    if($designation =="Project Lead")
    { 
        
        echo "Designation     :", $designation, "<br>";
    }

}
else
{
    $designationErr= "Designation must be selected. <br>";
}



if(!isset($_REQUEST["java"]) && !isset($_REQUEST["php"]) && !isset($_REQUEST["c"]))
{
    $vvv = "Preferred language must be selected.<br>";
    //echo $vvv,"<br>";
    
}
else
{
    echo "Preferred language   :  ";
    if(isset($_REQUEST["java"]))
    {
        $java= $_REQUEST["java"];
        echo $java, " ";
    }
    if(isset($_REQUEST["php"]))
    { 
        $php= $_REQUEST["php"];
        echo $php, " ";
    }
    if(isset($_REQUEST["c"]))
    {
        $c = $_REQUEST["c"];
        echo $c, " ";
    }
    echo "<br>";
}


$email = $_REQUEST["email"];
if($email=="")
{
    $emailErr= "Email should not be empty.<br>";
}
else
{
    echo "Email             :", $email , "<br>";
}

//echo $_FILES["myfile"]["name"];
if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../uploads/".$_FILES["myfile"]["name"]))
{
echo "File Uploaded..<br>";

}
else
{
    echo "File is not uploades..!! <br>";
}

$password=$_REQUEST["password"];
if(strlen($password)<6)
{
    $passwordErr= "Password should be more than 6 characters. <br>";
}
else
{
    $passwordSave= "Password Successfully Saved...!!";
}

//$name     =$_GET["name"];
//$gender   =$_GET["gender"];
//$dob      =$_GET["dob"];
//$email    =$_GET["email"];
//$password =$_GET["password"];


//echo $name;

//$name       =$_POST["name"];
//$gender     =$_POST["gender"];
//$dob        =$_POST["dob"];
//$email      =$_POST["email"];

//echo "Name          : ", $name ,"<br>" ;
//echo "Gender        : ", $gender ,"<br>";
//echo "Date of Birth : ", $dob ,"<br>";
//echo "Email         : ", $email ,"<br>";
//echo "<h4> Please Remember your password for further use..!</h4>;








//$password

//if(isset($_REQUEST["gender"]))
//{
//   if($gender==male)
//    {
//        echo "Gender        : ", $gender ,"<br>";
//    }
//    if($gender==female)
//    {
//        echo "Gender        : ", $gender ,"<br>";
//    }
//}
//else
//{
//    echo "You have not selected any one. <br>";
//}
}

?>