<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$link = $_POST['link']; 
		$url = $_POST['url'];
		
		$conn->query("INSERT INTO `link` VALUES('', '$link', '$url')");
		
		header('location: index.php');
	}
?>