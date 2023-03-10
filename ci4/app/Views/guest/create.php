<!DOCTYPE HTML>  
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Personal Website</title>
  <?php echo link_tag('css/style.css'); ?>
<style>
.error {color: #ff4321;}
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
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="L">
          <nav>
              <ul>
                  <li><a href="Home">Home</a></li>
                  <li><a href="AboutMe">About</a></li>
                  <li><a href="Gallery">Gallery</a></li>
                  <li><a href="Form">Form</a></li>
                  <li><a href="Resources">Resources</a></li>
              </ul> 
          </nav>
      </div>
    </br>

    <center>
    </br>
              <hr width="100%" color="8a3a3a" size="3" />
                  </br>
                  <hr width="100%" color="#c89595" size="4" />
                  </br></br>

<h2>Form</h2> 
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
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<br>";
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
?>

<?php
//From mysql_insert.php
// if statement below is for the MySQL insert code to execute only AFTER the submit button is pressed

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  $servername = "192.168.150.213";
  $username = "webprogmi212";
  $password = "b3ntRhino98";
  $dbname = "webprogmi212";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn === false) {
  die("Connection failed: " . mysqli_connect_error);
}

$sql = "INSERT INTO myguests (name, email, website, comment, gender)
VALUES ('$name', '$email', '$website', '$comment', '$gender')";

if (mysqli_query($conn, $sql)) {
  echo "<br>";
  echo "Guest entry created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
}
?>

</br>
<a href="Guest">Guest List</a></button>
</br>
</br>
</br>

  </body>
</html>
