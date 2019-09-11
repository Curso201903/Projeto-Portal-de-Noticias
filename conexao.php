<?php
	$conn = mysqli_connect('localhost','root','');
	$banco = mysqli_select_db($conn,'portal');
	mysqli_set_charset($conn,'utf8');
?>