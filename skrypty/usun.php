<?php
	session_start();
	require_once"../connect.php";
	$baza=@mysqli_connect($server,$user,$password,$database);
	
	$id_postu=$_GET['id'];

	echo $id_postu;
	$update="update posty set stan='u' where id=$id_postu;";
	mysqli_query($baza,$update);
	header("Location: ../glowna.php");
?>