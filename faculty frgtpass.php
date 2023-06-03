<?php

if(isset($_POST['uname'])   ||   isset($_POST['password']))
	
$servername = "localhost";
$username = $_POST['uname'];
$password = $_POST['password'];
$dbname = "registration";

// Create connection
$conn = mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'registration');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE faculty SET password='$password' WHERE name='$username'";

if ($conn->query($sql) === TRUE)
{
  
			echo '<script type="text/javascript">
            alert("Password updated successfully");
            </script>';
             header("Location: facultylogin.htm");
} 
else 
{
  echo '<script type="text/javascript">
            alert("Connection eroor");
            </script>' . $conn->error;
}

$conn->close();
?>