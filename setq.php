<?php
$con = mysqli_connect("localhost","root","","question");
if(!$con)
{ die('Could not connect: ' .mysql_error());
}
$sql="INSERT INTO ques(Question,OptionA,OptionB,OptionC) VALUES ('$_POST[question]','$_POST[AnswerA]','$_POST[AnswerB]','$_POST[AnswerC]')";
if(!mysqli_query($con,$sql))
{ die('Error: ' .mysql_error());
}
echo "RECORD ADDED SUCCESSFULLY";
?>