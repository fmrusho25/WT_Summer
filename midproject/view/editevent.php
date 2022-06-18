<html>

<head>
        <title> CSWAD - Event guest list </title>
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
                        <h1 align="middle"> Event guest list </h1>
                        <br>
                        <table width="100%" border="1">
                            <tr width="100%">
                                <th>
                                    Full Name
                                </th>
                                <th>
                                    Gender
                                </th>
                                <th>
                                    Blood Group
                                </th>
                                <th>
                                    Date of Birth
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Class
                                </th>
                                <th>
                                    Department
                                </th>
                                <th>
                                    Institution
                                </th>
                                <th>
                                    Present Address
                                </th>
                                <th>
                                    Phone Number
                                </th>
                                <th>
                                    Fb id Link
                                </th>
                            </tr>
                        <?php 

                        $filedata = file_get_contents('../data/eventdata.json');
                        $tmpjson = json_decode($filedata);

                    foreach($tmpjson as $myobj)
                    { 
                        echo "<tr>";
                        echo "  <td>".$myobj->fullname."  </td>";
                        echo "  <td>".$myobj->gender."  </td>";
                        echo "  <td>".$myobj->blood."  </td>";
                        echo "  <td>".$myobj->dob."  </td>";
                        echo "  <td>".$myobj->email."  </td>";
                        echo "  <td>".$myobj->class."  </td>";
                        echo "  <td>".$myobj->dept."  </td>";
                        echo "  <td>".$myobj->inname."  </td>";
                        echo "  <td>".$myobj->daddress."  </td>";
                        echo "  <td>".$myobj->phone."  </td>";
                        echo "  <td>".$myobj->fbpro."  </td>";
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
