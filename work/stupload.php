<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'registration');


$name=$_SESSION['name'];
$iden=$_SESSION['rollno'];
$filename = $_FILES["file"]["name"];
$tempname = $_FILES["file"]["tmp_name"];    
$folder = "auploads/".$filename;


$sql= "INSERT INTO `sassignment` (`sid`, `name`, `document`,`status`) VALUES ( '$iden','$name','$filename','1')";
$result= mysqli_query($con,$sql);

if($result==TRUE)
{
	

if(move_uploaded_file($tempname,$folder))
{
	
			print "<script>";
			print "alert(' successfully submitted....');";
			print "self.location='studentasngmnt.php';";
			print "</script>";
        
}

}





?>