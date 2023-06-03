<html>
<body>
<?php

$user_name = $_POST['uname'];
$Roll_no=$_POST['Rollno'];
$class = $_POST['class'];
$Create_password = $_POST['password'];
$re_password = $_POST['passwordd'];
$con = mysqli_connect('localhost','root','','registration');
if($con->connect_error)
{
	echo"$con->connect_error";
	die("connection failed : ".$con->connect_error);
}
else
{
	
	
	

  


	
$reg="INSERT INTO  student(name,rollno,password) VALUES ('$user_name',$Roll_no,' $Create_password')";
            mysqli_query($con ,$reg);
            echo '<script type="text/javascript">
               alert("registration successfull");
               </script>';
            header('Location:studentlogin.htm?registration successfull');
        
    




}
?>
</body>
</html>