<html>
<body>
<?php

$date=$_POST['date'];
$day=$_POST['day'];
$fhr = $_POST['fname'];
$shr = $_POST['sname'];
$thr = $_POST['tname'];


$con = mysqli_connect('localhost','root','','registration');
if($con->connect_error)
{
	echo"$con->connect_error";
	die("connection failed : ".$con->connect_error);
}
else
{ 


        
	
 $reg="INSERT INTO ttable(date,day,frsthr,scndhr,thrdhr) VALUES ('$date','$day','$fhr','$shr','$thr')";
            mysqli_query($con ,$reg);
            echo '<script type="text/javascript">
               alert("registration successfull");
               </script>';
           header('Location:timetable.php');
}      
?>
</body>
</html>