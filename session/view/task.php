

<?php

include ("../control/process.php");

?>

<html>
<head>
<title>Lab2 - Registatin Form</title>
</head>
<body>

<?php
echo "";
?>
<h1 align="left">Registration Form</h1>
<hr>

<table align="left">

<form action="" method="post" enctype="multipart/form-data">
    
    <tr>
        
    <td>    
    First Name:  
    <br>
    <br>
    </td> 
    
    <td>
    
    <input type="text" name="fname">
    <?php 
    echo $nameErr; 
    echo $name1Err;
    ?>
    <br>
    <br>
</td>

</tr>
    <tr>
        <td>    
    Last Name:  
    <br>
    <br>
    </td> 
    <td>
    <input type="text" name="lname">
    <?php 
    echo $nameErr; 
    echo $name2Err;
    ?>
    <br>
    <br>
    </td>
</tr>
    
<tr>
        
    <td>    
    
    Age:  
    <br>
    <br>
    </td>
     <td>
    <input type="text" name="age">
    <br>
    <br>
</td>

</tr>

    
    <tr> 
        
    <td> 
    <br>
    <br>
        <input type="submit" value="Next" name="next">
        <input type="reset" value="Reset" name="reset">
    </td>
    
    <td>
        
    </td>

</tr>

</form>
</table>

<br> <br>


</body>
</html>