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

if(isset($_POST["submit"]))
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

if(isset($_REQUEST["designation"]))
{
    $designation = $_REQUEST["designation"];
    
    echo "Designation     :", $designation, "<br>";
    $_SESSION["designation"]=$designation;


}
else
{
    $designationErr= "Designation must be selected. <br>";
    $haserror=1;
}



if(!isset($_REQUEST["java"]) && !isset($_REQUEST["php"]) && !isset($_REQUEST["c"]))
{
    $vvv = "Preferred language must be selected.<br>";
    $haserror=1;
    //echo $vvv,"<br>";
    
}
else
{
    echo "Preferred language   :  ";
    if(isset($_REQUEST["java"]))
    {
        $plang= $_REQUEST["java"];
        $_SESSION["plang"]=$plang;
        echo $plang, " ";
    }
    if(isset($_REQUEST["php"]))
    { 
        $plang1= $_REQUEST["php"];
        $_SESSION["plang1"]=$plang1;
        echo $plang1, " ";
    }
    if(isset($_REQUEST["c"]))
    {
        $plang2 = $_REQUEST["c"];
        $_SESSION["plang2"]=$plang2;
        echo $plang2, " ";
    }
    echo "<br>";
}


$email = $_REQUEST["email"];
if($email=="")
{
    $emailErr= "Email should not be empty.<br>";
    $haserror=1;
}
else
{
    $_SESSION["email"]=$email;
    echo "Email             :", $email , "<br>";
}

//echo $_FILES["myfile"]["name"];
if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../uploads/".$_FILES["myfile"]["name"]))
{
    $_SESSION["file"]="../uploads/".$_FILES["myfile"]["name"];
echo "File Uploaded..<br>";

}
else
{
    echo "File is not uploades..!! <br>";
    $haserror=1;
}

$password=$_REQUEST["password"];
if(strlen($password)<6)
{
    $passwordErr= "Password should be more than 6 characters. <br>";
    $haserror=1;
}
else
{
    $_SESSION["password"]=$pass;
    $passwordSave= "Password Successfully Saved...!!";
}

$location = "../uploads/";
$comma=", ";

if($haserror==0)
{
    header("Location: ../view/page.php");
}

{
    $formdata = array(
        'fname'=> $_POST["fname"],
        'lname'=> $_POST["lname"],
        'age'=>$_POST["age"],
        'designation'=> $_POST["designation"],
        'plang'=> $plang.$comma.$plang1.$comma.$plang2 ,
        'email'=>$_POST["email"],
        'password'=> $_POST["password"],
        'file' => $location.$_FILES["myfile"]["name"]
     );
        $existingdata = file_get_contents('../data/data.json');
        $tempJSONdata = json_decode($existingdata);
        $tempJSONdata[] =$formdata;
    
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
    
    
    if(file_put_contents("../data/data.json", $jsondata)) 
     {
         echo "<br><br>Regisration Complete. <br>";
     }
    else 
     {
         echo "<br><br>Sorry ! Registration faild <br>";
     }
    }
}
?>