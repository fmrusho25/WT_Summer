<html>
<head>
<title>Lab1 - Form data input in database</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

<h1> My Website </h1>

<div class="sticky">
    <div class="topnav">
<a href="#"> Home</a>
<a href="#"> About Us</a>
<a href="../view/lab1.php" class="active"> Registration</a>
<a href="#"> Services</a>
<a href="#"> Contact</a>
    </div>
</div>

<div class="middlecolumn ">
<h1 class="toph1">Registration</h1>


<div class="registrationBox">
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
    </td>
    <td>  

        <input type="text" name="password">
    </td>
    </tr>
    <tr> <td> 

    <br>
    <br>

    </td><td>
        <input class="button submit" type="submit" value="Submit">
        <input class="button reset" type="reset" value="Reset">
    </td></tr>

</form>
</table>
</div>
</div>

<p> Hello World </p>
    
    <p> Hello World </p>
    
    <p> Hello World </p>
    
    <p> Hello World </p>
    
    <p> Hello World </p>
    
    <p> Hello World </p>
    
    <p> Hello World </p>
    
    <p> Hello World </p>
    
    <p> Hello World </p>
    
    <p> Hello World </p>
    
    <p> Hello World </p>
    
    <p> Hello World </p>
    
    <p> Hello World </p>
    
    <p> Hello World </p>
    
    <p> Hello World </p>
    
    <p> Hello World </p>
    
    <p> Hello World </p>


<div class="fixed">
<p class="copy" align="center"> My Copywrite</p>
</div>

</body>
</html>