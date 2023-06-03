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

a.two:link, a.two:visited {
  background-color: black;
  color:white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  
}


/* Add padding to containers */
.container {
  padding: 8px;
}


div.transbox {
  margin: 20px;
  background-color: #ffffff;
  opacity: 0.8;
}

div.transbox p {
  margin: 3%;
  font-weight: strong;
  color: #000000;
}
input {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black
  box-sizing: border-box;
}

/* Set a style for all buttons */
.button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  align:center;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  border-radius: 1px;
}

form {
 width:450px;
 padding:1px;
 border-radius:8px;
 align:center;
}


/* Add padding to containers */
.container {
  padding: 8px;
}

</style>
</head>

<body>

<div class="sidenav">
<a href="faculty portal.php" class="one">Home</a>

  <a href="submission.php" class="one">Submission Details</a>
 <a href="fnotification.php" class="one">Notify Students</a>
 
  <a href="logout.php" class ="one">Log Out</a>
</div>

<div class="content">
 <h2 align ="center "><p style="font-family:times new roman;color:black">KWOLEDGE WORLD</H2>
         <div class="header">
..
</div>
<div class="transbox">
<form action="asngmt.php" method="post">
 <label ><b>S.No</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number"  name="id" required><br>
 <label ><b>Assignment Name</b></label>&nbsp;
    <input type="text" placeholder="Enter assignment name" name="aname" required><br>
	
    <label><b> Assignment Details</b></label>
    <input type="text" placeholder="Enter assingment details" name="adetails"  required><br>
	<label><b>Due Date</b></label>&nbsp;
 <input type="date" name="date" required><br><br>
<button type="submit" class="button">Submit</button> &nbsp;&nbsp;<a href="atable.php" class="two">View</a>&nbsp;&nbsp;<br>
	

	
	</form>
</div>
 </div>
</body>
</html>
