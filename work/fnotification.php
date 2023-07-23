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

<body>

<div class="sidenav">
 <a href="faculty portal.php" class="one">Home</a>
<a href="facultyprofile.php" class="one" >Profile</a>
 
 <a href="logout.php" class ="one">Log Out</a>
</div>

<div class="content">
 <h2 align ="center "><p style="font-family:times new roman;color:black">KWOLEDGE WORLD</H2>
         <div class="header">
..
</div><br><br>


<table width="800" border="1" align="center">
     
     
      <tr>
        <td>
        <form action="fnoti.php" method="post">
          <label>Message</label>
           <textarea name="message" rows="5" cols="50" ></textarea>
        <table width="180px" align="left" >
            	<tr>
                	<td> Select date : <br />
                   <?php 
				 		    $dt = getdate();
							$day = $dt["mday"];
							$month = date("m");
							$year = $dt["year"];
							
							echo "<select name='cdate'>";
							for($a=1;$a<=31;$a++)
							{
								if($day == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select><select name='cmonth'>";
							for($a=1;$a<=12;$a++)
							{
								if($month == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select><select name='cyear'>";
							for($a=2010;$a<=$year;$a++)
							{
								if($year == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select>";
						?>                    
                    </td>
                </tr>
             </table>	
        
          <table width="400" border="2" align="left" bordercolor="black" bgcolor="white" style="margin-left:20px;">
            
            <tr bgcolor="black">
              <td width="114"><p style="color:#ffffff">Enrolment no</p></td>
              <td width="152"><p style="color:#ffffff">Name</p></td>
              <td width="110"><p style="color:#ffffff">Select</p></td>
            </tr>
            <?php
				include "z_db.php";
				extract($_POST);
				$query = "select * from `student` order by `id`";
				$s = 0;
				$result = mysqli_query($con,$query)or die("select error");
				while($rec = mysqli_fetch_array($result))
				{
					$s = $s + 1;
					echo ' <tr>
							  <td width="114">'.$rec["rollno"].'</td>
							  <td width="152">'.$rec["name"].'</td>
							  <td width="110"><input type=checkbox name='.$rec["rollno"].' onclick="getatt(this.checked);"/></td>
							</tr>';
				}
			?>		
			
            <tr>
              <td colspan="3"><div align="center">
               <br> <input type="submit" value="Submit" name="btnsubmit"/>&nbsp;&nbsp; 
               <!-- <a href ="printreport.php" >report</a> -->
               <br> &nbsp;&nbsp;</div></td>
            </tr>
          </table>
          </form>
         
         	


         
         </td>
      </tr>
    </table>
 </div>
</body>
</html>
<style>
<!--
.style1 {
	font-family: Times new roman;
	font-size: 60px;
	color: #FFFFFF;
	font-style: italic;
}
.style2 {
	font-size: 24px;
	color: #0000FF;
}
.style7 {color: #ffffff;}
-->
</style>
<script type="text/javascript">
	function getatt(value)
	{
		if(value == true)
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) - 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) + 1;
		}
		else
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) + 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) - 1;
		}
	}
</script>


