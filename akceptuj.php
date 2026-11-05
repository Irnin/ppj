<?php
session_start();
	echo $_GET['id'];
	echo $_GET['tryb'];
	echo $_SESSION['id'];
	
	
	require_once"connect.php";
	
	$baza=@mysqli_connect($server,$user,$password,$database);
		
	if($_GET['tryb']=="tak"){$okiii="update znajomi set status='a' where id_somsiada2=".$_GET['id']." and id_somsiada1=".$_SESSION['id'].";";}
	if($_GET['tryb']=="nie"){$okiii="update znajomi set status='n' where id_somsiada2=".$_GET['id']." and id_somsiada1=".$_SESSION['id'].";";}

	mysqli_query($baza,$okiii);

	
	mysqli_close($baza);
	header('Location: glowna.php');
	exit();
?>