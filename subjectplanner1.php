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
input[type=text], input[type=time] {
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
  border-radius: 1px;
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

a.two:link, a.two:visited {
  background-color: black;
  color: white;
  border: 2px solid black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a.two:hover, a.one:active {
  background-color: black;
  color: white;
}

</style>
</head>
<body>

<div class="sidenav">
<a href="STUDENT portal.php" class="one" >Home</a>
 
  
  <a href="studentasngmnt.php"class ="one">Assignment</a>
  <a href="sexam.php"class ="one">Results</a>
  <a href="logout.php" class ="one">Log Out</a>
</div>
<div class="content">
 <h2 align ="center "><p style="font-family:times new roman;color:black">KWOLEDGE WORLD</H2>
 
 
         <div class="header">
.
</div>
<Form action="subplan1.php" method = "post">
<U><H2 align="center"> SET TIMETABLE </H2></U>
<div class="transbox">
<p>

  <div class="container">
    <label for="time"><b>TIME</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="time"  name="time" required><br>

    <label for="tname"><b>Topic Name</b></label>
    <input type="text"  name="tname" required><br>

    <button type="submit">Set</button>&nbsp;&nbsp; <a class="two" href="subjectplanner1.php">Add New</a> &nbsp;&nbsp; <a class="two" href="viewtable.php">View</a>
	
 </div>
 </div>
 </p>

 </form>
</body>
</html>
