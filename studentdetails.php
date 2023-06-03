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
  margin-left: 200px;
  padding-left: 0px;
}

div.transbox {
  margin: 20px;
  background-color: #ffffff;
  opacity: 10;
}

div.transbox p {
  margin: 2%;
  font-weight: strong;
  color: #000000;
}
input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #000000;
  box-sizing: border-box;
}
button {
  background-color: #000000;
  color: white;
  padding: 14px 20px;
  align:center;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  border-radius: 8px;
}

form {
 width:450px;
 padding:1px;
 border-radius:8px;
 align:center;
}
.container {
  padding: 11px;
}

table{
	border-collapse :collapse;
	width:50%;
	color:#000000;
	font-family:times new roman;
	font-size :20px;
	text-align: center;
	
}
table, td, th {
  border: 1px solid black;
}
th {
  background-color: #000000;
  color: white ;
}

tr:nth-child(even)
{background-color:#f2f2f2}
.display
{
	padding:11px;
	align:center;
	
	margin:20px;
}

</style>
</head>
<body>

<div class="sidenav">
<a href="faculty portal.php" class="one" >Home</a>  
  
  <a href="fexammarks.php"class ="one">Exam Marks</a>
  <a href="notification.php"class ="one">Message</a>
  <a href="logout.php" class ="one">Log Out</a>
</div>
<div class="content">
 <h2 align ="center "><p style="font-family:times new roman;color:black">KWOLEDGE WORLD</H2>
 



         <div class="header">
.
</div>
<H3  ALIGN='CENTER'><U>STUDENT DETAILS</U></H3>
 <div class = "display">
 



<?php

error_reporting(0);

$con = mysqli_connect('localhost','root','','registration');
if($con->connect_error)
{
	echo"$con->connect_error";
	die("connection failed : ".$con->connect_error);
}
else
{ $sql = "SELECT id, name, rollno FROM student";
$result = $con->query($sql);
if ($result->num_rows > 0) {
echo"<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Roll Number</th>
<th>Operations</th>
</tr>";

  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "
	
	<tr>
	<td>" . $row["id"]. "</td>
	<td> " . $row["name"]. " </td>
	<td> " . $row["rollno"]. "</td>
	<td> <a href='studentdetailsdelete.php?rn=".$row['rollno']."'> Delete </a></td>
	</tr>";
  }
  echo " </table>";
  $rn='$result[rollno]';
}

else 
{
	echo'<h2 align=center> No Records</h2>';
}	
$con->close();
}
?>
</div>
</div>
</body>
</html>
