<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
</head>

<body>
<h2>City Name</h2>
<?php
$i=0;
while($db_row = mysqli_fetch_array($result)) {
?>
<input type="checkbox" ><?php echo $db_row["city_name"]; ?><br>
<?php
$i++;
}
?>
</body>
</html>