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
  background-color:  #000000; 
 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


a.two:link, a.two:visited {
  background-color:black;
  color:white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  
}



/* Add padding to containers */
.container {
  padding: 8px;
}


input , select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #555555;
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
<a href="facultyprofile.php" class="one" >Profile</a>
  <a href="fworkspace.php" class="one">Work Space</a>
 
 
  <a href="logout.php" class ="one">Log Out</a>
</div>

<div class="content">
 <h2 align ="center "><p style="font-family:times new roman;color:black">KWOLEDGE WORLD</H2>
         <div class="header">
..
</div>
<div class="transbox">
<form action="ttable.php" method="post">
 &nbsp;&nbsp;&nbsp;<label ><b>Date</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="date" placeholder="" name="date" required><br>
	
 &nbsp;&nbsp;&nbsp;   <label><b> Day</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select id="day" name="day">
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
	 <option value="Friday">Friday</option>
	  <option value="Saturday">Saturday</option>
  </select><br>
&nbsp;&nbsp;&nbsp;	<label><b> First Hour</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="" name="fname"  required><br>
&nbsp;&nbsp;&nbsp;	<label><b> Second Hour</b></label>&nbsp;&nbsp;
    <input type="text" placeholder="" name="sname"  required><br>
&nbsp;&nbsp;&nbsp;	<label><b> Third Hour</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="" name="tname"  required><br>
	
	<button type="submit" class="button">Submit</button>&nbsp;&nbsp;&nbsp;<a href="vttable.php" class ="two">View</a>
	</form>
</div>
 </div>
</body>
</html>
