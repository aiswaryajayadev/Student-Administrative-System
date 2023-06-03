<html>
<body>
<?php
session_start();
$Time = $_POST['time'];
$topicname=$_POST['tname'];

$con = mysqli_connect('localhost','root','','registration');
if($con->connect_error)
{
	echo"$con->connect_error";
	die("connection failed : ".$con->connect_error);
}
else
{ 

$name=$_SESSION['name'];
$iden=$_SESSION['rollno'];
	
$reg="INSERT INTO `subjectplanner1` ( `member_id`,`Time`, `Topicname`) VALUES ( '$iden',TIME('$Time'), '$topicname');";
            mysqli_query($con ,$reg);
            echo '<script type="text/javascript">
               alert("subject added");
               </script>';
			   header('location:subjectplanner1.php');
            
        
    
} 
?>
</body>
</html>