<?php
	if(isset($_POST["btnsubmit"]))
	{
		$con=mysqli_connect("localhost","root","","registration");	
		
		$date = $_POST["cyear"]."-".$_POST["cmonth"]."-".$_POST["cdate"];
               		
		$query = "select *from `student` ";
		$result = mysqli_query($con,$query)or die("select error");
		while($rec = mysqli_fetch_array($result))
		{
			$mno = $rec["rollno"];
			if(isset($_POST[$mno]))
			{
				$reg = "INSERT INTO  `attendance`(`member_id` ,  `date` ,  `attendance`) VALUES('$mno','$date','1')";
				mysqli_query($con,$reg)or die("insert error1");
			print "<script>";
			print "alert('Attendance get successfully....');";
			print "self.location='getattendance.php';";
			print "</script>";
        
			}
			else
			{
				$res = "INSERT INTO  `attendance`(`member_id` ,  `date` ,  `attendance`) VALUES('$mno','$date','0')";
				mysqli_query($con,$res)or die("insert error2");
			print "<script>";
			print "alert('Attendance get successfully....');";
			print "self.location='getattendance.php';";
			print "</script>";
			}
			
		}
		
		
			
		
	}
	else
	{
		header("Location:faculty portal.php");
	}
	?>
