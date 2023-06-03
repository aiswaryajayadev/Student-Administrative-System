<table>
<tr>
<th>Roll number</th>
<th>Subject Name</th>
<th>Marks(10)</th>
</tr>
</table>
<?php

if(isset($_POST["btnsubmit"]))
{ 
include "z_db.php";
$rollno=$_POST['rollno'];


 $sql = "SELECT * FROM exammarks where rollno='$rollno'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td> " . $row["rollno"]. " </td><td> " . $row["subname"]. "</td><td> " . $row["marks"]. " </td></tr>";
  }
  echo " </table>";
}
else
{
	echo"no record available";
}	


}
?>