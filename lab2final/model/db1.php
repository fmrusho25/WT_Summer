<?php
class db1
{
    function openCon()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "secl";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            echo "error to connect";
        }
        return $conn;
    }

    function insertUser($fname, $lname, $age, $table, $filename, $password, $email, $designation, $conn)
    {

        $sqlstr = "INSERT into $table (name,username,password) 
            VALUES ($fname, $lname, $age $filename, $password, $email, $designation)";

        if ($conn->query($sqlstr)) {
            echo "data inserted";
        }
        else {
            echo "can't insert" . $conn->error;
        }
    }

}

?>