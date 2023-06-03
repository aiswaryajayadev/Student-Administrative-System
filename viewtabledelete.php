<?php
include "z_db.php";


$rollno=$_GET['rn'];
$quer="DELETE FROM subjectplanner1 WHERE id='$rollno'";

$data=mysqli_query($con,$quer);
if($data)
{
	header('location:viewtable.php');
	
}
else
{
	echo'error';
}
?>