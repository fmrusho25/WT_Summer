<?php

include ("../control/eventpro.php");

?>
<html>

<head>
        <title> CSWAD - Event </title>
</head>

<body bgcolor="yellow">

    <table width="100%">
        <tr>
            <td width="30%">
                <h1> CSWAD </h1>
            </td>
            <td width="70%">
                <p align="right">
                    <a href="login.php"><input type="submit" value=" Login " name="login"> </a> .
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
            <td bgcolor="#abcdef" width="16.66%">
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
           <td width="16.666%">
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
           <td width="66.666%">

            <table width="100%" border="2" bgcolor="white">
                <tr>
                    <td>
                        <br>
                        <h1 align="middle"> Quiz Registration Form</h1>
                        <p align="middle"><i> Remember the user name and password for showing result.!</i></p>
                        <br>
                        <table width="100%" align="center">
                            <tr>
                                <td align="left" width="15%">
                                User Name :
                                </td>
                                <td align="left" width="35%">
                                <input type="text" name="uname">
                                <br>

    <?php 
    echo $unamer; 
    ?>
    <br>
                                </td>
                                <td align="left" width="15%">
                                Department:
                                </td>
                                <td align="left" width="35%">
                                <input type="radio" name="dept" value="Science"> Science
                                <input type="radio" name="dept" value="Arts"> Arts
                                <input type="radio" name="dept" value="Humenities"> Humenities

                                <br>

    <?php 
    echo $deptr; 
    ?>
    <br>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                Full Name :
                                </td>
                                <td align="left">
                                <input type="text" name="fullname">
                                <br>

    <?php 
    echo $fullnamer; 
    ?>
    <br>
                                </td>
                                <td align="left">
                                Institution Name:
                                </td>
                                <td align="left">
                                <input type="text" name="inname">
                                <br>

    <?php 
    echo $innamer; 
    ?>
    <br>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                Date of Birth :
                                </td>
                                <td align="left">
                                <input type="date" name="dob">
                                <br>

    <?php 
    echo $dobr; 
    ?>
    <br>
                                </td>
                                <td align="left">
                                Present Address:
                                </td>
                                <td align="left">
                                <input type="text" name="daddress">
                                <br>

    <?php 
    echo $daddressr; 
    ?>
    <br>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                Gender :
                                </td>
                                <td align="left">
                                <input type="radio" name="gender" value="Male"> Male
                                <input type="radio" name="gender" value="Female"> Female
                                <input type="radio" name="gender" value="Other"> Other
                                <br>

    <?php 
    echo $genderr; 
    ?>
    <br>
                                </td>
                                <td align="left">
                                Fb Profile Link :
                                </td>
                                <td align="left">
                                <input type="text" name="fbpro">
                                <br>

    <?php 
    echo $fbpror; 
    ?>
    <br>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                Blood Group :
                                </td>
                                <td align="left">
                                <input type="radio" name="blood" value="A+"> A+
                                <input type="radio" name="blood" value="A-"> A-
                                <input type="radio" name="blood" value="B+"> B+
                                <input type="radio" name="blood" value="B-"> B-
                                <input type="radio" name="blood" value="AB+"> AB+
                                <input type="radio" name="blood" value="AB-"> AB-
                                <input type="radio" name="blood" value="O+"> O+
                                <input type="radio" name="blood" value="O-"> O-
                                <br>

    <?php 
    echo $bloodr; 
    ?>
    <br>

                                </td>
                                <td align="left">
                                Hobby :
                                </td>
                                <td align="left">
                                <input type="text" name="hobby">
                                <br>

    <?php 
    echo $hobbyr; 
    ?>
    <br>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                Email:
                                </td>
                                <td align="left">
                                <input type="email" name="email">
                                <br>

    <?php 
    echo $emailr; 
    ?>
    <br>
                                </td>
                                <td align="left">
                                Create a pasword :
                                </td>
                                <td align="left">
                                <input type="password" name="password">
                                <br>

    <?php 
    echo $passwordr; 
    ?>
    <br>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                Phone :
                                </td>
                                <td align="left">
                                <input type="number" name="phone">
                                <br>

    <?php 
    echo $phoner; 
    ?>
    <br>
                                </td>
                                <td align="left">
                                Confirm Password :
                                </td>
                                <td align="left">
                                <input type="password" name="pass1">
                                <br>

    <?php 
    echo $pass1r; 
    ?>
    <br>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                Class:
                                </td>
                                <td align="left">
                                <input type="radio" name="class" value="6"> 6
                                <input type="radio" name="class" value="7"> 7
                                <input type="radio" name="class" value="8"> 8
                                <input type="radio" name="class" value="9"> 9
                                <input type="radio" name="class" value="10"> 10
                                <input type="radio" name="class" value="11"> 11
                                <input type="radio" name="class" value="12"> 12
                                <input type="radio" name="class" value="Admission"> Admission
                                <br>

    <?php 
    echo $classr; 
    ?>
    <br>    
                                </td>
                                <td align="left">
                                Upload your Photo (jpeg file only) :
                                </td>
                                <td align="left">
                                <input type="file"  name="myfile">
                                <br>

    <?php 
    echo $myfiler; 
    ?>
    <br>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td align="right">
                                    <br>
                                <input type="submit" name="Register" value="Regiser">
                                </td>
                                <td align="left">
                                    <br>
                                <input type="reset" name="reset" value="Reset">
                                </td>
                                <td>

                                </td>
                            </tr>
                        </table>

                        <br>
    <?php 
    echo $registerr; 
    echo $registers;
    ?>
    <br>
                        <br>
                        <p align="center"> If you are already Registered, <i>Please go to  <a href="login.php">Login </a> page.</i></b>
                        <br>
                        <br>

                    </td>
                </tr>
            </table>

           </td>
           <td width="16.666%">
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
