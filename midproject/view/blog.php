<html>

<head>
        <title> CSWAD - Blog </title>
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
            <td bgcolor="#000000" width="16.66%">
                <p align="middle"><a href="event.php"> Event </a></p>
            </td>
            <td bgcolor="#000000" width="16.66%">
                <p align="middle"><a href="find.php"> Find </a></p>
            </td>
            <td bgcolor="#abcdef" width="16.66%">
                <p align="middle"><a href="blog.php"> Blog </a></p>
            </td>
            <td bgcolor="#000000" width="16.66%">
                <p align="middle"><a href="contact.php"> Contact </a></p>
            </td>
        </tr>
    </table>

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
                        <h1 align="middle"> Blog Posts </h1>
                        <br>
                        <table width="100%" border="1">
                        
                        <?php 

                        $filedata = file_get_contents('../data/blog.json');
                        $tmpjson = json_decode($filedata);

                    foreach($tmpjson as $myobj)
                    { 
                        echo "<tr>";
                        echo "  <td align='center'>".$myobj->ublog."  </td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "  <td align='center'>".$myobj->pblog."  </td>";
                        echo "</tr>";
                        echo "<tr bgcolor='yellow'>";
                        echo "  <td align='center' > <br> </td>";
                        echo "</tr>";

                }

                ?>

                        </table>


                        
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
