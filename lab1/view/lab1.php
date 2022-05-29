<html>
<head>
<title>Lab1 - Form data input in database</title>
</head>
<body>

<?php
echo "";
?>
<h1 align="center">Registration</h1>

<table align="center">

<form action="../control/process.php" method="post">
    
<tr>
    <td>    
    Name:  
    </td> <td>
    <input type="text" name="name">
    </td></tr>
    <tr> <td> 
        Gender:  
    </td><td> 
        <input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female"> Female
    </td></tr>
    <tr><td>
        Date of Birth:  
    </td><td> 
        <input type="date" name="dob">
    </td></tr>
    <tr> <td> 
        Email:  
    </td><td> 
        <input type="email" name="email">
    </td></tr>
    <tr> <td> 
        Password: 
    </td><td>  
        <input type="text" name="password">
    </td></tr>
    <tr> <td> 

    </td><td>
        <input type="submit" value="Submit">
    </td></tr>

</form>
</table>

<br> <br>

<?php
$txt = " Hello  World"; 
$x=5;
$y=10.5;
echo "I   Love   " . $txt . " ! <br>"; 
echo $x + $y;
?>

</body>
</html>