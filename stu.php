<!DOCTYPE html>
<html>
<body>
<?php

$con = mysqli_connect("localhost","root","password","test");

if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_select_db(test);

$sql="CREATE TABLE student(name INT,rollno INT,age INT)";

if(mysqli_query($con,$sql))
{
echo"table student created successfully";
}

mysqli_query($con,"INSERT INTO student(name.rollno.,age)VALUES('reegan',37,22)");
mysqli_query($con,"INSERT INTO student(name,rollno,age)VALUES('rygan',38,23)");
mysqli_query($con,"INSERT INTO student(name,rollno,age)VALUES('rithick',39,24)");
if(!mysqli_query($con,$sql))
{
	echo mysql_error();
}
else
{
	echo" 3 records added to the table";
}
mysqli_close($con);
?>
</body>
</html>











