<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'registration');


$name=$_POST['name'];

$filename = $_FILES["file"]["name"];
$tempname = $_FILES["file"]["tmp_name"];    
$folder = "uploads/".$filename;

$sql= "INSERT INTO `coursematerial` ( `name`, `document`) VALUES ( '$name','$filename')";
$result= mysqli_query($con,$sql);

if($result==TRUE)
{
	

if(move_uploaded_file($tempname,$folder))
{
	echo '<script type="text/javascript">
	      alert("file 1 upload successful");
		  </script>';
}


header('location:new 1.php');


}
?>