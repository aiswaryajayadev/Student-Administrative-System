<?php
session_start();
	if(isset($_POST["btnsubmit"]))
	{
		
		$con=mysqli_connect("localhost","root","","registration");	

$name=$_SESSION['name'];
		$date = $_POST["cyear"]."-".$_POST["cmonth"]."-".$_POST["cdate"];
               		
		$query = "select * from `student` ";
		$result = mysqli_query($con,$query)or die("select error");
		$msg=$_POST['message'];
        while($rec = mysqli_fetch_array($result))
		{
			$mno = $rec["rollno"];
			if(isset($_POST[$mno]))
			{
				$reg = "INSERT INTO  `mesg`(`name`,`member_id` ,  `date` ,  `message`) VALUES('$name','$mno','$date','$msg')";
				mysqli_query($con,$reg)or die("insert error1");
			print "<script>";
			print "alert('Message send successfully....');";
			print "self.location='notification.php';";
			print "</script>";
        
			}
			// else
			// {
			// 	$res = "INSERT INTO  `attendance`(`member_id` ,  `date` ,  `attendance`) VALUES('$mno','$date','')";
			// 	mysqli_query($con,$res)or die("insert error2");
			// print "<script>";
			// print "alert('Attendance get successfully....');";
			// print "self.location='getattendance.php';";
			// print "</script>";
			// }
			
		}
		
		
			
		
	}
	else
	{
		header("Location:faculty portal.php");
	}
	?>
