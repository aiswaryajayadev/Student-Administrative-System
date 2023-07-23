<html>
<body>
<?php

$rollno=$_POST['rollno'];
$name=$_POST['sname'];
$marks = $_POST['marks'];

$cmarks=$_POST['cmarks'];
$c2marks=$_POST['c2marks'];
$c1marks=$_POST['c1marks'];
$con = mysqli_connect('localhost','root','','registration');
if($con->connect_error)
{
	echo"$con->connect_error";
	die("connection failed : ".$con->connect_error);
}
else
{ 

$total= $cmarks+$c2marks+$c1marks;
        
	
 $reg="INSERT INTO exammarks(rollno,subname,c,c1,c2,total) VALUES ('$rollno','$name','$cmarks','$c1marks','$c2marks','$total')";
            mysqli_query($con ,$reg);
            echo '<script type="text/javascript">
               alert("registration successfull");
               </script>';
           header('Location:fexammarks.php');
}      
?>
</body>
</html>