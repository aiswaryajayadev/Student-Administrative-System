<html lang="en">
<head>
<title>Faculty Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
.header {
  background-color:  #000000;
  padding: 10px;
  text-align: center;
}

body {
  margin: 0;
  font-family: Times New Roman;
}

/* Style the side navigation */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
}


/* Side navigation links */
.sidenav a.one {
  color: white;
  padding:20;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.sidenav a.one:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
	padding :20px;
  margin-left: 200px;
  padding-left: 0px;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 50px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 80px 100px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #555555;
  padding: 50px 50px;
  border-radius :12px;
}

.button1:hover {
  background-color: #555555;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #555555;
  padding: 50px 50px;
   border-radius :12px;
}

.button2:hover {
  background-color: #555555;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #555555;
  padding: 50px 50px;
  border-radius :12px;
}

.button3:hover {
  background-color: #555555;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
  padding: 50px 50px;
  border-radius :12px;
}

.button4:hover {background-color: #555555; color: white;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
  padding: 50px 50px;
  border-radius :12px;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
.button6 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
  padding: 50px 50px;
  border-radius :12px;
}

.button6:hover {
  background-color: #555555;
  color: white;
}
a.two:link, a.two:visited {
  background-color: white;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  
}

a.two:hover {
  background-color:  #555555;
  color: white ;
}

</style>
</head>
<?php
error_reporting(0);
$con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'registration'); 
	if ($con->connect_error) 
	{
        die("Connection failed: " . $con->connect_error);
    }
		
session_start();

$name=$_SESSION['name'];

 $sql = "select * from faculty where name = '$name'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

		$s1=mysqli_query($con,$sql);
          if($row=mysqli_fetch_array($s1))
              {
		       $id=$row[0];
               $username=$row[1];
			   $email=$row[2];			   
               $password=$row[3];
			   
			  }

?>
<body>

<div class="sidenav">
<a href="facultyprofile.php" class="one" >Profile</a>
  <a href="fworkspace.php" class="one">Work Space</a>
 <a href="timetable.php"class ="one">Set Timetable</a>
  
  
 
  <a href="logout.php" class ="one">Log Out</a>
</div>

<div class="content">
 <h2 align ="center "><p style="font-family:times new roman;color:black">KWOLEDGE WORLD</H2>
         <div class="header">
..
</div>
<h2 align = center><U>WELCOME <?PHP echo $name;?></u></h2>



<button class="button button1"><a href="getattendance.php"class="two" >Attendance</a></button> <button class="button button1"><a href="fwrktable.php"class="two" >Reminder</a></button>
<button class="button button1"><a href="new 1.php"class="two" >Upload Course Material</a></button>
<button class="button button1"><a href="studentdetails.php"class="two" >Student Details</a></button>
<button class="button button1"><a href="assingment.php"class="two" >Set Assignment</a></button>

 </div>
</body>
</html>
