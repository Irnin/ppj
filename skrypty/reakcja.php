<?php
	session_start();
	require_once"../connect.php";
	$baza=@mysqli_connect($server,$user,$password,$database);
	
	$id_postu=$_GET['id'];
	$reakcja=$_GET['reakcja'];
	$powrut=$_GET['powrut'];
	$id_uzytkownika=$_SESSION['id'];
	$profil=$_GET['profil'];
	
	$zapytanie="select * from browary where id_postu=$id_postu and id_uzytkownika=$id_uzytkownika";
	
	$zapytanie2=mysqli_query($baza,$zapytanie);
	$wiersz2=mysqli_num_rows($zapytanie2);

		if($wiersz2==1) 
		{
			$update="update browary set kurrr='$reakcja' where id_postu=$id_postu and id_uzytkownika=$id_uzytkownika";
			mysqli_query($baza,$update);
		}
		else
		{
			$update="insert into browary values(null,$id_postu,$id_uzytkownika,'$reakcja');";
			mysqli_query($baza,$update);			
		}
	
	if($powrut=="glowna") header("Location: ../$powrut.php");
	if($powrut=="profil") header("Location: ../$powrut.php?id=$profil");
?>