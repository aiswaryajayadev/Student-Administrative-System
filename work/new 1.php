<html>
<head>
<title> Faculty portal</title>
</head>

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
input[type=text], input[type=password] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #000000;
  box-sizing: border-box;
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
button {
  background-color: #000000;
  color: white;
  padding: 14px 20px;
  align:center;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  border-radius: 1px;
}

a.two:link, a.two:visited {
  background-color: black;
  color:white ;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  
}
form{
	width:10px;
 padding:1px;
 border-radius:8px;
 align:center;
}
</style>
</head>
<body>

<div class="sidenav">
<a href="faculty portal.php" class="one" >Home</a>
  
 

 
  <a href="logout.php" class ="one">Log Out</a>
</div>

<div class="content">
 <h2 align ="center "><p style="font-family:times new roman;color:black">KWOLEDGE WORLD</H2>
         <div class="header">
..
</div><br><br>
<table width="800" border="0" align="center">
<br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form method="POST" action="upload.php" enctype="multipart/form-data"><br>
<label><b>Document Name</b></label>
&nbsp;&nbsp;&nbsp;<input type='text' name='name'/><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="file" name="file"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <BUTTON class='button' type="submit">Upload</BUTTON><br><br>

 &nbsp;&nbsp;&nbsp;<a href="fnotification.php" class="two">Notify Students</a><br>
 </form>
</table>
</body>
</html>