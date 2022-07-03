<?php
class db
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

    function insertUser($name, $username, $password, $table, $conn)
    {

        $sqlstr = "INSERT into $table (name,username,password) 
            VALUES ('$name','$username','$password')";

        if ($conn->query($sqlstr)) {
            echo "data inserted";
        }
        else {
            echo "can't insert" . $conn->error;
        }
    }

}

?>