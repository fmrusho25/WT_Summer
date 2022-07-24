<?php
//$name     =$_GET["name"];
//$gender   =$_GET["gender"];
//$dob      =$_GET["dob"];
//$email    =$_GET["email"];
//$password =$_GET["password"];


//echo $name;

$name       =$_POST["name"];
$gender     =$_POST["gender"];
$dob        =$_POST["dob"];
$email      =$_POST["email"];

echo "Name          : ", $name ,"<br>" ;
echo "Gender        : ", $gender ,"<br>";
echo "Date of Birth : ", $dob ,"<br>";
echo "Email         : ", $email ,"<br>";
//echo "<h4> Please Remember your password for further use..!</h4>;

?>