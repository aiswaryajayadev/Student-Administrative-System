<?php
session_start();
?><html lang="en">
<head>
<title>Student login</title>
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
  /* align:center; */
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
 /* align:center; */
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
/* align:center; */
	
	margin:20px;
}

</style>
</head>
<body>

<div class="sidenav">
<a href="student portal.php" class="one" >Home</a>
 
  

  <a href="logout.php" class ="one">Log Out</a>
</div>
<div class="content">
 <h2 align ="center "><p style="font-family:times new roman;color:black">KWOLEDGE WORLD</H2>
 



         <div class="header">
.
</div><br>



<?php

$con = mysqli_connect('localhost','root','','registration');
$name=$_SESSION['name'];
$iden=$_SESSION['rollno'];

$sql = "SELECT name,date,message from mesg where member_id = '$iden'";
$result = mysqli_query($con,$sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "
	<h3 align=center><u>
Messages</u></h3>
 <div class = display>
<table>
<tr>
<th>Message From</th>
<th>Date</th>

<th>Message</th>";
  while($row = $result->fetch_assoc()) {
    
echo"
</tr>
    <tr>
	<td>" . $row["name"]. "</td>
    <td>" . $row["date"]. "</td>
    <td> " . $row["message"]. "</td>
	
	</tr>";
  }
  echo " </table>";
} 
else
{
	echo '<h2 align=center>No Message send</h2>';
}


?>
</div>
</div>
</body>
</html>