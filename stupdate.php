<?php

if(isset($_POST['id'])   ||   isset($_POST['name'])  ||   isset($_POST['rollno'])  ||   isset($_POST['pass']))
	
$servername = "localhost";
$id=$_POST['id'];
$username = $_POST['name'];
$rollno = $_POST['rollno'];
$pass=$_POST['pass']
$dbname = "registration";

// Create connection
$conn = mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'registration');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE student SET name='$username' , rollno='$rollno' ,password='$pass'  WHERE id='$id'";

if ($conn->query($sql) === TRUE)
{
  
			echo '<script type="text/javascript">
            alert("Password updated successfully");
            </script>';
             header("Location: logout.php");
} 
else 
{
  echo '<script type="text/javascript">
            alert("Connection eroor");
            </script>' . $conn->error;
}

$conn->close();
?>