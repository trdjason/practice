<?php
ob_start();
session_start();

function insert_student($fname, $lname, $mname, $age){
	$query = "INSERT into `table-stud` values('', '".$fname."', '".$lname."', '".$mname."', '".$age."')";
	$myquery=mysql_query($query);
	return $myquery;
}

function display_students(){
	$query = "SELECT * from　`table-stud`";
	$myquery=mysql_query($query);
	return $myquery;
}
?>