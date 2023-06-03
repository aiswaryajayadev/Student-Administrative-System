<?php
session_start();
if(  isset($_POST["roll"]) || isset($_POST["uname"])   ||  isset($_POST["password"]))
//Fetching data from textboxes	
$username= $_POST['uname'];
$password= $_POST['password'];
$rollnumber=$_POST['roll'];
//Database connection
$conn = new mysqli('localhost','root','','registration');
 if($conn->connect_error)
 {
	 die("Failed connection ".$conn->connect_error);
 }
else
 {
 $sql = "select * from student where name = '$username' AND password='$password' AND rollno = '$rollnumber' ";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        $_SESSION['name']=$username;
		$_SESSION['id']=$id;
		 $_SESSION['rollno']=$rollnumber;
		 $_SESSION['password']=$password; 
          $s1=mysqli_query($conn,$sql);
          if($row=mysqli_fetch_array($s1))
              {
               $id=$row[0];               
			  
			   $username=$row[1];
			    $rollnumber=$row[2];
			   $password=$row[3];
			
			if($result==TRUE)
			{
				
			echo '<script type="text/javascript">
            alert("login successfull");
            </script>';
             header("Location: student portal.php");

			}
		               }  
        else
		{  
             header("Location: studentlogin.htm?error=Incorect User name or password");
             			 
        } 
 


    }	
?>
<html>
<body>
</body>
</html>




