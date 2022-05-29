<html>
<head>
<title>Lab1 - Form data input in database</title>
</head>
<body>

<?php
echo "";
?>
<h1 align="center">Calculation</h1>

<table align="center">

<form action="../control/taskpro.php" method="post">
    
    <tr> <td>    
    Number 1 
    </td> <td>
    <input type="text" name="number1">
    </td></tr>
    <tr> <td>    
    Number 2
    </td> <td>
    <input type="text" name="number2">
    </td></tr>
    <tr> <td> 
    Choose Operation 
    </td><td> 
        <input type="radio" name="operation" value="+"> + 
        <input type="radio" name="operation" value="-"> - 
        <input type="radio" name="operation" value="*"> * 
        <input type="radio" name="operation" value="/"> /
    </td></tr>

    </td><td>
        <input type="submit" value="Result">
    </td></tr>

</form>
</table>

</body>
</html>