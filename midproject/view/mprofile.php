<?php
session_start(); 

if(empty($_SESSION["uname"])) // Destroying All Sessions
{
header("Location: ../view/login.php"); // Redirecting To Home Page
}

?>

<html>

<head>
        <title> CSWAD - Member Profile </title>
</head>

<body bgcolor="yellow">

    <table width="100%">
        <tr>
            <td width="30%">
                <h1> CSWAD </h1>
            </td>
            <td width="70%">
                <p align="right">
                    <p align="right"> <?php echo "Welcome ". $_SESSION["uname"]; ?> </p>
                </p>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td bgcolor="#000000" width="16.66%">
                <p align="middle"><a href="home.php"> Home </a></p>
            </td>
            <td bgcolor="#000000" width="16.66%">
                <p align="middle" ><a href="member.php"> Member </a></p>
            </td>
            <td bgcolor="#000000" width="16.66%">
                <p align="middle"><a href="event.php"> Event </a></p>
            </td>
            <td bgcolor="#000000" width="16.66%">
                <p align="middle"><a href="find.php"> Find </a></p>
            </td>
            <td bgcolor="#000000" width="16.66%">
                <p align="middle"><a href="blog.php"> Blog </a></p>
            </td>
            <td bgcolor="#000000" width="16.66%">
                <p align="middle"><a href="contact.php"> Contact </a></p>
            </td>
        </tr>
    </table>

    <br>
    <br>
    <br>
    <table width="100%" align="middle">
       <tr>
           <td width="2.5%">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
           </td>
           <td width="95%">

            <table width="100%" border="2" bgcolor="white">
                <tr>
                    <td>
                        <br>
                        <h1 align="middle"> <?php echo "Welcome to ". $_SESSION["uname"]."'s"; ?> profile </h1>
                        <br>
                        
                        <h3><?php echo "Your user name is  : ". $_SESSION["uname"]; ?> </h3>
                        <h3><?php echo "Your password is  : ". $_SESSION["password"] ; ?> </h3>

                        <?php

                        $uname=$_SESSION["uname"];
                        $password=$_SESSION["password"]; 

                        $filedata = file_get_contents('../data/data.json');
                        $tmpjson = json_decode($filedata);

                    foreach($tmpjson as $myobj)
                    {

                        $_SESSION["uname"]=$uname;
                        $_SESSION["password"]=$password;


                        if($myobj->uname==$_SESSION["uname"] && $myobj->password==$_SESSION["password"])
                        {
                        echo "<img src='".$myobj->file."' width='190px'>"."<br><br>";
                        echo "Name              :     ". $myobj->fullname  ."<br>";
                        echo "Gender            :     ". $myobj->gender."<br>";
                        echo "Date of Birth     :     ". $myobj->dob."<br>";
                        echo "Phone Number      :     ". $myobj->phone."<br>";
                        echo "Email             :     ". $myobj->email."<br>";
                        echo "Institution       :     ". $myobj->inname."<br>";
                        echo "Occupation        :     ". $myobj->occupation."<br>";
                        echo "present  address  :     ". $myobj->daddress."<br>";
                        echo "permanent address :     ". $myobj->caddress."<br>";
                    
                        }
                        else
                        {
                            //echo " No <br>";
                        }
                    }
                        ?>

                        <br> 
                        
                        <br>
                        <p align="center">

                        Do you want to <a href="../control/logoutpro.php">logout</a> .?

                        </p>
                        <br>
                        <br>

                    </td>
                </tr>
            </table>

           </td>
           <td width="2.5%">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
           </td>

       </tr>
   </table>
    <br>


    <hr>
    <table width="100%">
        <tr>
            <td  width="40%">
                <p>
            <a href="home.php"> Home </a> |
            <a href="member.php"> Member </a> |
            <a href="event.php"> Event </a> |
            <a href="find.php"> Find </a> |
            <a href="blog.php"> Blog </a> |
            <a href="contact.php"> Contact </a> </p>
            <hr align="left" width="55%">
            </td>
            <td  width="20%">

            </td>
            <td  width="40%">
                <p align="right"> Developed By @WT[L] Group 04 </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="left">
                    <i>welsome</i> <?php echo $_SESSION["uname"]; ?>  
                </p>
            </td>
            <td>
            <p align="middle"> Copyright <b><i>@CSWAD </i></b> 2022 </p>
            </td>
            <td>

            </td>
        </tr>

<body>
</html>
