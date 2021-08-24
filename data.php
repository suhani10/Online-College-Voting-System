<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "question";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}

$i=0;
while($db_row = mysqli_fetch_array($result)) {
?>
<input type="checkbox" ><?php echo $db_row["Question"]; ?><br>
<?php
$i++;
}
?>
