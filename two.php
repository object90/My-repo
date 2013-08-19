<?php
$x=5; // global scope

function myTest()
{
echo $x; // local scope
}

myTest();


$con = mysql_connect('localhost','root','password');

if(!$con){
	echo mysql_error();
}

mysql_select_db('test'); 








?>
