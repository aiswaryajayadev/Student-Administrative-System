<?php
 
include "z_db.php";


$rollno=$_GET['rn'];
$quer="DELETE FROM assingment WHERE id='$rollno'";

$data=mysqli_query($con,$quer);
if($data)
{
	header('location:atable.php');
	
}
else
{
	echo'error';
}
?>