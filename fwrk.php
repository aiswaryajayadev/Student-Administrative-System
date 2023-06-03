<html>
<body>
<?php
session_start();

 $id=$_SESSION['id'];    
$dt = date('Y-m-d h:i:s');
$details = $_POST['message'];
$date=$_POST['date'];

$con = mysqli_connect('localhost','root','','registration');
if($con->connect_error)
{
	echo"$con->connect_error";
	die("connection failed : ".$con->connect_error);
}
else
{ 
   

	
 $reg="INSERT INTO fworkspace(member_id,date_entry,details,due_date) VALUES ('$id','$dt','$details','$date')";
            mysqli_query($con ,$reg);
            echo '<script type="text/javascript">
               alert("registration successfull");
               </script>';
           header('Location:fworkspace.php');
}      
?>
</body>
</html>