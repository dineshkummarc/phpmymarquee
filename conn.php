<?php
	$conn = new mysqli('localhost', 'root', '', 'db_marquee');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>