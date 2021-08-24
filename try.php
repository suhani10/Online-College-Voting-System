<?php
$con = mysqli_connect("localhost","root","","question");

if(!$con)
{ die('Could not connect: ' .mysql_error());
}
$result = mysqli_query($con,"SELECT * FROM question");

echo "Question";
echo"<FORM>";
echo"<SELECT Question='Question1'>";
while($row=mysqli_fetch_array($result)){
$varop=$row["Question"];
echo "<OPTION VALUE='$varop'>" .$varop;
}
echo "</SELECT>";
echo "</FORM>";
mysqli_close($con);
?>

	