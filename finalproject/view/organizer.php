<?php 
session_start();

if (isset($_SESSION['oid']) && isset($_SESSION['ouname'])) {

 ?>


<html>
    <head>
        <title> CSWAD </title>
        <link rel="stylesheet" href="../style/style.css">
        <script src="../ajax/ajax.js"></script> 
    </head>

    <body>


    <h1 class="headh1"> CSWAD </h1>
    <p> <i> Chilmari Student Welfare Association-Dhaka </i> </p>
    <button onclick="myFunction()">Change Mode</button>
    

    <br>

    <div class="navbar" id="cswadtopmb">
        <a href="../view/index.php">Home</a>
        <a href="#member">Member</a>
        <a href="#event">Event</a>
        <a href="../view/find.php">Find</a>
        <a href="#blog">Blog</a>
        <a href="#contact">Contact</a>
        <a href="../control/outpro.php"  class="active"><?php echo $_SESSION['oname']; ?>, Logout</a>
    </div>

     <h2>Hello, <?php echo $_SESSION['oname']; ?></h2>

     


     <?php
include('../connection/db_conn.php');

     $oname = $_SESSION['oname'];


$query = "SELECT * FROM organizer WHERE oname='$oname' ";
$result = $conn->query($query);
?>



<form>

<table border="0" cellspacing="0" cellpadding="10" align="center">
<?php
 if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <th></th>
    
    <td></td>
    <td><img src="../image/<?php echo $row['ophoto']; ?>" align="center" width = 125 height = 125 title="<?php echo $row['ophoto']; ?>"> </td>
 </tr>
     
 <tr>
    <th>User Name</th>
    
    <td> : </td>
    <td><?php echo $row['ouname']; ?> </td>
 </tr>
 <tr>
    <th>Full Name</th>
    
    <td> : </td>
    <td><?php echo $row['oname']; ?> </td>
 </tr>
 <tr>
    <th>Gender</th>
    <td> : </td>
    <td><?php echo $row['ogender']; ?> </td>
 </tr>
 <tr>
    <th>Blood Group</th>
    <td> : </td>
    <td><?php echo $row['oblood']; ?> </td>
 </tr>
 <tr>
    <th>Email</th>
    <td> : </td>
    <td><?php echo $row['oemail']; ?> </td>
 </tr>
 <tr>
    <th>Date of Birth</th>
    <td> : </td>
    <td><?php echo $row['odob']; ?> </td>
</tr>
 <tr>   
    <th>Address</th>
    <td> : </td>
    <td><?php echo $row['oaddress']; ?> </td>
</tr>
<tr>   
    <th>Mobile</th>
    <td> : </td>
    <td><?php echo $row['omobile']; ?> </td>
</tr>    

</table>
 </form>



 <h1>.</h1>

    <a href="../view/oredit.php"> Edit Profile </a>
    

    


     <?php
}
} else {
  echo "0 results";
}
?>
 <h1>.</h1>







     <h1>.</h1>
     <a href="../control/outpro.php">Logout</a>
     <h1>.</h1>
     <div class="footer" id="footer">
        <p align="center"> <i> Copyright 2022 by CSWAD. All Rights Reserved.</i></p>
    </div>
</body>
</html>

<?php 
}else{
     header("Location: ../view/login.php");
     exit();
}
 ?>

