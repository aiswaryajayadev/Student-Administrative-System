<html lang="en">
<head>
<title>Student Login</title>
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

<body>

<div class="sidenav">
<a href="student portal.php" class="one">Home</a>
<a href="studentprofile.php" class="one" >Profile</a> 
 
 
  <a href="logout.php" class ="one">Log Out</a>
</div>

<div class="content">
 <h2 align ="center "><p style="font-family:times new roman;color:black">KWOLEDGE WORLD</H2>
         <div class="header">
..
</div><br><br>

<h3 align="center"><u>Attendance Report</u></h3><br>
		<?php
		session_start();
		
			$con = mysqli_connect('localhost','root','','registration');
$name=$_SESSION['name'];
$iden=$_SESSION['rollno'];
			$query = "select * from `student` where rollno = '$iden' limit 1";

			$result = mysqli_query($con,$query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr><td colspan="2"><table width="90%" border="2" align="center" bordercolor="#000000" bgcolor="#ffffff">
				<tr>
				  <td width="606" bgcolor="#000000"><span class="style2">Enrolment No</span></td>
				  <td width="606" bgcolor="#000000"><span class="style2">Name</span></td>';
				  $query1 = "SELECT * FROM `attendance` WHERE member_id = '$iden' order by date";
					$result1 = mysqli_query($con,$query1)or die("select error ");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td width = "606" bgcolor="#000000"  class=style2>'.$rec1["date"].'</td>';
					}
				echo '</tr>
				<tr>
				  <td width="606"><span class="style6">'.$rec["rollno"].'</span></td>
				  <td width="606"><span class="style6">'.$rec["name"].'</span></td>';
				  $quer = "SELECT * FROM `attendance` WHERE member_id = '$iden' order by date";
					$res = mysqli_query($con,$quer)or die("select error error");
					while($rec1 = mysqli_fetch_array($res))
					{
				  		echo '<td>';
						if($rec1["attendance"]==0)
							echo "Absent";
						else
							echo "Present";
						echo '</td>';
					}
				
				echo '
				</tr>
								
			  </table></td></tr>';
			}
			
			 if($rec1["attendance"]==0)
			  {
		$sql = 'select count(distinct date) from `attendance` '  ;
				 $result1 = mysqli_query($con,$sql)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
					$count= $rec1["count(distinct date)"];					
					
		
				  $sql = "select count(distinct date) from `attendance` WHERE  attendance=1 and  member_id= '$iden' "  ;
				 $result1 = mysqli_query($con,$sql)or die("select error error11");
					while($rec1 = mysqli_fetch_array($result1))
					{
					$pre= $rec1["count(distinct date)"];					
					
					
					
					  }
					  $p=($pre/$count)*100;
					  $fp=number_format($p, 2);
					if($fp>50)
					 {
					
					echo'<br> <h2 align= center>Total Attendance percentage = '.$fp.'% </h2>';
					 }else{
					 	 echo '<h2 align= center> '.$fp.'% : Attendance is short  </h2>';
					 }
					}
					
			  }  
		
		?>
		
		
		
<style type="text/css">
<!--
.style1 {
	font-family: times new roman;
	font-size: 50px;
	color: #000000;
	font-style: italic;
}
.style2 {
	font-size: 20px;
	color: #ffffff;
}
.style6 {font-size: 16px}
-->
</style>
		</html>
		</body>