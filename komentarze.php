<?php
	require_once"connect.php";
	session_start();		
	
	
	$tresc=$_POST['tresc'];
	$idpostu=$_GET['id'];
					
	$baza=@mysqli_connect($server,$user,$password,$database);
	$zapytanie="select*from komentarze where id_uzytkownika='".$_SESSION['id']."' order by id desc limit 1;";
					
		if($wynik=@$baza->query($zapytanie))
		{
			$ilu_userow = $wynik->num_rows;
			$wiersz = $wynik->fetch_assoc();
						
			if($wiersz['tresc']!=$tresc)
			{
				$id=$_SESSION['id'];
				mysqli_query($baza,"insert into komentarze values(null, $id , $idpostu, '$tresc' , now());");
			}

		}
			
		mysqli_close($baza);
			
		header('Location: glowna.php');
		exit();
?>