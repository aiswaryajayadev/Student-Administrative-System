<?php
session_start();
if( isset($_POST["id"]) || isset($_POST["uname"])   ||  isset($_POST["password"]))
//Fetching data from textboxes	
$id=$_POST['id'];
$username= $_POST['uname'];
$password= $_POST['password'];

//Database connection
$conn = new mysqli('localhost','root','','registration');
 if($conn->connect_error)
 {
	 die("Failed connection ".$conn->connect_error);
 }
else
 {
 $sql = "select * from faculty where name = '$username' AND password='$password' ";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        $_SESSION['name']=$username;
		$_SESSION['id']=$id;
		 $_SESSION['email']=$email;
		 $_SESSION['password']=$password; 
          $s1=mysqli_query($conn,$sql);
          if($row=mysqli_fetch_array($s1))
              {
               $id=$row[0];               
			   
			   $username=$row[1];
			   $email=$row[2];
			   $password=$row[3];
			
			if($result==TRUE)
			{
				
			print "<script>";
			print "alert('  successfully logged in....');";
			print "self.location='faculty portal.php';";
			print "</script>";
			
			}
		               }  
        else
		{  
            print "<script>";
			print "alert(' Incorrect username or password');";
			print "self.location='facultylogin.htm';";
			print "</script>";
			
             			 
        } 
 


    }	
?>
<html>
<body>
</body>
</html>








