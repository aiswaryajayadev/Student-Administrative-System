<html>
<body>
<?php

session_start();
$user_name = $_POST['uname'];
$Create_password = $_POST['password'];
$re_password = $_POST['passwordd'];
$email = $_POST['email'];
$con = mysqli_connect('localhost','root','','registration');
if($con->connect_error)
{
	echo"$con->connect_error";
	die("connection failed : ".$con->connect_error);
}
else
{ 


        
	
 $reg="INSERT INTO faculty(name,email,password) VALUES ('$user_name','$email','$Create_password')";
            
            
			mysqli_query($con,$reg)or die("insert error2");
			print "<script>";
			print "alert('  successfully Signed up....');";
			print "self.location='facultylogin.htm';";
			print "</script>";
		$sql = "select * from faculty ";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        $_SESSION['name']=$username;
		$_SESSION['id']=$id;
		 $_SESSION['email']=$email;
		 $_SESSION['password']=$password; 
 	
			
}      
?>
</body>
</html>