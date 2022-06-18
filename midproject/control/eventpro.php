<?php
$unamer     ="";
$fullnamer     ="";
$dobr    ="";
$genderr    ="";
$bloodr     ="";
$emailr     ="";
$phoner     ="";
$classr     ="";
$deptr     ="";
$innamer     ="";
$daddressr     ="";
$fbpror     ="";
$passwordr     ="";
$pass1r     ="";
$myfiler     ="";
$hobbyr="";
$registerr="";
$registers="";
$unamer="";


if(isset($_POST["Register"]))
{
    //echo "<h3>Previous Submission Informations....</h3> <br> ";
$uname     =$_REQUEST["uname"];
$fullname     =$_REQUEST["fullname"];
$dob     =$_REQUEST["dob"];
//$gender[]     =$_REQUEST["gender"];
//$blood[]     =$_REQUEST["blood"];
$email     =$_REQUEST["email"];
$phone     =$_REQUEST["phone"];
$class     =$_REQUEST["class"];
//$dept []    =$_REQUEST["dept"];
$inname     =$_REQUEST["inname"];
$daddress     =$_REQUEST["daddress"];
$fbpro     =$_REQUEST["fbpro"];
$hobby     =$_REQUEST["hobby"];
$password     =$_REQUEST["password"];
$pass1     =$_REQUEST["pass1"];
//$myfile     =$_REQUEST["myfile"];

if($uname=="")
{
    $unamer= "User Name Required. <br>";
}
else
{
        if(is_numeric($_REQUEST["uname"]))
            {
                $unamer= "User Name should not contain numeric value.<br>";
    
            }
        else
            {
                $uname     =$_REQUEST["uname"];

                //echo "User Name          : ", $uname ,"<br>" ;
            }
}


if($fullname=="")
{
    $fullnamer= "Name Required. <br>";
}
else
{
        if(is_numeric($_REQUEST["fullname"]))
            {
                $fullnamer= "Name should not contain numeric value.<br>";
    
            }
        else
            {
                $fulname     =$_REQUEST["fullname"];

                //echo "Full Name          : ", $fullname ,"<br>" ;
            }
}

if(isset($_REQUEST["gender"]))
{
    $gender = $_REQUEST["gender"];
 
    //echo "Gender     :", $gender, "<br>";

}
else
{
    $genderr= "Gender must be selected. <br>";
}


$email = $_REQUEST["email"];
if($email=="")
{
    $emailr= "Email should not be empty.<br>";
}
else
{
    //echo "Email             :", $email , "<br>";
}

$phone = $_REQUEST["phone"];
if($phone=="")
{
    $phoner= "Phone Number should not be empty.<br>";
}
else
{
    if(strlen($phone)==11)
    {
        //echo "Phone             :", $phone , "<br>";
    }
    else
    {
        $phoner= "Enter a valid phone number without country code .<br>";
    }
}

$daddress = $_REQUEST["daddress"];
if($daddress=="")
{
    $daddressr= "Present address should not be empty.<br>";
}
else
{
    //echo "Present Address             :", $daddress , "<br>";
}

if(isset($_REQUEST["dept"]))
{
    $dept = $_REQUEST["dept"];
    //echo "Department    :", $dept, "<br>";

}
else
{
    $deptr= "Department must be selected. <br>";
}


if(isset($_REQUEST["blood"]))
{
    $blood = $_REQUEST["blood"];
    //echo "Blood group     :", $blood, "<br>";
}
else
{
    $bloodr= "Blood Group must be selected. <br>";
}

$class = $_REQUEST["class"];
if($class=="")
{
    $classr= "Class should not be empty.<br>";
}
else
{
    //echo "Class             :", $class , "<br>";
}

$inname = $_REQUEST["inname"];
if($inname=="")
{
    $innamer= "Institute Name should not be empty.<br>";
}
else
{
    //echo "Institute Name            :", $inname , "<br>";
}

$dob = $_REQUEST["dob"];
if($dob=="")
{
    $dobr= "Date of Birth should not be empty.<br>";
}
else
{
    //echo "Date of Bith            :", $dob , "<br>";
}

$fbpro = $_REQUEST["fbpro"];
if($fbpro=="")
{
    $fbpror= "Facebook Link should not be empty.<br>";
}
else
{
    //echo "Facebok ink             :", $fbpro , "<br>";
}

$hobby = $_REQUEST["hobby"];
if($hobby=="")
{
    $hobbyr= "Hobby should not be empty.<br>";
}
else
{
    //echo "Hobby             :", $hobby , "<br>";
}


$password=$_REQUEST["password"];
$pass1=$_REQUEST["pass1"];
if(strlen($password)<6)
{
    $passwordr= "Password should be more than 6 characters. <br>";
}
else
{
    if( $password==$pass1)
    {
    //echo "Password Successfully Saved...!! <br>";
    }
    else 
    {
        $pass1r= "Password are not matched..! <br>";
    }
}

if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../upload/".$_FILES["myfile"]["name"]))
{
    $mf="up";
//echo "File Uploaded..<br>";

}
else
{
    $myfiler= "File is not uploades..!! <br>";
}

if($fullname!="" && $uname!="" && $gender!="" && $dob!="" && $dept!="" && $email!="" && $daddress!="" && $class!="" && $mf=="up" && $pass1!="" && $password!="" && $hobby!="" && $inname!="" && $fbpro!=""&& $blood!=""&& $phone!="")

{
$formdata = array(
    'uname'=> $_POST["uname"],
    'fullname'=> $_POST["fullname"],
    'gender'=>$_POST["gender"],
    'blood'=>$_POST["blood"],
    'dob'=> $_POST["dob"],
    'email'=> $_POST["email"],
    'dept'=>$_POST["dept"],
    'daddress'=> $_POST["daddress"],
    'class'=> $_POST["class"],
    'phone'=> $_POST["phone"],
    'hobby'=>$_POST["hobby"],
    'fbpro'=> $_POST["fbpro"],
    'inname'=> $_POST["inname"],
    'password'=> $_POST["password"],
    'file' => $_FILES["myfile"]["name"]
 );
    $existingdata = file_get_contents('../data/eventdata.json');
    $tempJSONdata = json_decode($existingdata);
    $tempJSONdata[] =$formdata;

    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);


if(file_put_contents("../data/eventdata.json", $jsondata)) 
 {
     $registers= "<br><br>Regisration Complete. <br>";
 }
else 
 {
    $registerr= "<br><br>Sorry ! Registration faild <br>";
 }
}
else
{
    $registerr = "Sorry ! Registration faild. <br>";
}
}

?>