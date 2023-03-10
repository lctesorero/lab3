<!DOCTYPE html>
<html lang="en">
<head>
 <title>My Personal Website</title>
 <?php echo link_tag('css/style101.css'); ?><body>
</br> </br> 
<center>

<h2>My Guest</h2>

</br> 
<?php

  $servername = "192.168.150.213";
  $username = "webprogmi212";
  $password = "b3ntRhino98";
  $dbname = "webprogmi212";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, comment FROM myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"].  " Email: " . $row["email"]. " Comment " . $row["comment"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</br>
<a href="Form">return</a></button>
</center>
</body>
</html>
