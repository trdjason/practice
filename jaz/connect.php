<?php
	if(!mysql_connect('localhost','root','') || !mysql_select_db('student')){
		die("Could not connect to database!".mysql_error());
	}
?>
