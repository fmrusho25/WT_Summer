<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

 
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = $_POST["website"];
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!filter_var($website, FILTER_VALIDATE_URL)) {
      $websiteErr = "Invalid email format";
      $website = "";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = $_POST["comment"];
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }
}

if (empty($_POST["date of birth"])) {
  $dareErr = "date is required";
} else {
  $date = $_POST["date"];
}





?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="feamle">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  Degree:

  <input type="checkbox" id="Degree1" name="Degree1" value="SSC">
<label for="vehicle1"> SSC </label><br>
<input type="checkbox" id="Degree2" name="Degree2" value="HSC">
<label for="vehicle2"> HSC </label><br>
<input type="checkbox" id="Degree3" name="Degree3" value="Bsc">
<label for="vehicle3"> Bsc</label><br>
<input type="checkbox" id="Degree4" name="Degree4" value="Msc">
<label for="vehicle3"> Msc </label><br>

Date of birth:
 
<input type="radio" name="date" <?php if (isset($date) && $date=="day") echo "checked";?> value="day">Day
  <input type="radio" name="month" <?php if (isset($date) && $date=="month") echo "checked";?> value="month">Month
  <input type="radio" name="year" <?php if (isset($date) && $date=="year") echo "checked";?> value="year">Year 
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo $date_of_birth;
echo "<br>";
?>

</body>
</html>
