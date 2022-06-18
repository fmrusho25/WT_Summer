<?php
session_start(); 

if(empty($_SESSION["uname"])) // Destroying All Sessions
{
header("Location: ../view/login.php"); // Redirecting To Home Page
}

?>

<html>

<head>
        <title> CSWAD - EDITOR's Profile </title>
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

                        <br> 
                        <h2 align="center"><i> EDITOR'S  FUNCTIONS </i></h2>
                        <hr align="center" width="300px"><br>
                        <h3 align="center"><a href="../view/event.php"> ADD GUEST </a></h3><br>
                        <h3 align="center"><a href="../view/blogpost.php"> MAKE BLOG POST </a></h3><br>
                        <!--<h3 align="center"><a href="../view/editevent.php"> EDIT GUEST </a></h3>-->
                        <br>
                        <br>
                        <p align="center">
                        <br>
                        <br>
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
