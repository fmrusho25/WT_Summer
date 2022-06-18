<?php
include ("../control/loginpro.php");


if(isset($_SESSION['alogin'])){
header("location: profile.php");
}
else
{
    if(isset($_SESSION['elogin']))
    {
    header("location: eprofile.php");
    }
    else
    {
        if(isset($_SESSION['mlogin']))
        {
        header("location: mprofile.php");
        }
        else
        {
            if(isset($_SESSION['glogin']))
            {
            header("location: gprofile.php");
            }
        }
    }
}

?>

<html>

<head>
        <title> CSWAD - Login </title>
</head>

<body bgcolor="yellow">

    <table width="100%">
        <tr>
            <td width="30%">
                <h1> CSWAD </h1>
            </td>
            <td width="70%">
                <p align="right">
                    <a href="login.php"><input type="submit" value=" Login " name="login"> </a> 
                    <a href="registration.php"><input type="submit" value=" Registration " name="registration"> </a>
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
                <p align="middle"><a href="member.php"> Member </a></p>
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
    <form action="" method="post" enctype="multipart/form-data">
   <table width="100%" align="middle">
       <tr>
           <td width="33.333%">
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
           <td width="33.333%">

            <table width="100%" border="2" bgcolor="white">
                <tr>
                    <td>
                        <br>
                        <br>
                        <br>
                        <h1 align="middle"> Login </h1>
                        <br>
                        <br>
                        <table width="100%" align="center">
                            <tr>
                                <td align="left">
                                User Name :
                                </td>
                                <td align="left">
                                <input type="text" name="uname" value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>">

                                <br>

    <?php 
    echo $unamer; 
    ?>
    <br>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                Password :
                                </td>
                                <td align="left">
                                <input type="password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"> 
                                <br>

    <?php 
    echo $passr; 
    ?>
    <br>   
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                </td>
                                <td align="left">
                                    <br>
                                    <p><input type="checkbox" name="remember" /> Remember me
	                                </p>

                                </td>
                            </tr>

                            <tr>
                                <td align="right">
                                    <br>
                                    <br>
                                <input type="submit" name="alogin" value="ADMIN LOGIN">
                                <input type="submit" name="elogin" value="EDITOR LOGIN">
                                </td>
                                <td align="left">
                                <br>
                                <br>
                                <input type="submit" name="mlogin" value="MEMBER LOGIN">
                                <input type="submit" name="glogin" value="GUEST LOGIN">
                                </td>
                            </tr>
                        </table>
                        <br>

<?php 
echo $logr; 
?>
                        <br>
                        <br>
                        <br>
                        <p align="center"> If you don't have an account and you are from <b>CHILMARI</b>, <i>Please complete your <a href="registration.php">Registration </a> .</i></b>
                        <br>
                        <br>
                        <br>
                    </td>
                </tr>
            </table>

           </td>
           <td width="33.333%">
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
</form>
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
                    <a href="login.php"><input type="submit" value=" Login " name="login"> </a> .
                    <a href="registration.php"><input type="submit" value=" Registration " name="registration"> </a>
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
