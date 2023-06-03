<html>
<body>
<?php
$con = mysqli_connect('localhost','root','','registration');
$id=$_POST['id'];
$name = $_POST['aname'];
$details = $_POST['adetails'];
$date=$_POST['date'];

if($con->connect_error)
{
	echo"$con->connect_error";
	die("connection failed : ".$con->connect_error);
}
else
{        
	
 $reg="INSERT INTO assingment(id,name,details,due_date) VALUES ('$id','$name','$details','$date')";
            mysqli_query($con ,$reg);
            echo '<script type="text/javascript">
               alert("registration successfull");
               </script>';
           header('Location:assingment.php');
}      
?>
</body>
</html>