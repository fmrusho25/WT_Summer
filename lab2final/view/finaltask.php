<?php
include ("../control/pro.php")
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
    Full Name:  
    </td> 
    
    <td>
    
    <input type="text" name="name">
    
</td>

</tr>
    <tr>
        <td>    
    User Name:  
    </td> 
    <td>
    <input type="text" name="username">
    </td>
</tr>

    <tr>
        
    <td> 
        Password: 
    </td>
    
    <td>  
        <input type="text" name="password">
    </td>

</tr>
    
    <tr> 
        
    <td> 
        <input type="submit" value="Submit" name="submit">
        <input type="reset" value="Reset">
    </td>
    
    <td>
        
    </td>

</tr>

</form>
</table>

<br> <br>


</body>
</html>