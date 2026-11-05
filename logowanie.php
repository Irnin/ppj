<head>
	<style>
		body
		{
			background-image: url(https://media.giphy.com/media/Vuw9m5wXviFIQ/giphy.gif);
			background-size: cover;
			background-attachment: fixed;
			
		}
	</style>
</head>

<?php
	require_once"connect.php";
	
	if ((!isset($_POST['dejpan'])) || (!isset($_POST['dejpan2'])))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
	
		session_start();
		
			$errorlogowanie="";

			if($_POST['dejpan']!=""and$_POST['dejpan2']!="")
			{	
				$baza=@mysqli_connect($server,$user,$password,$database);
				$zapytanie="select*from users where login='".$_POST['dejpan']."' and haslo='".$_POST['dejpan2']."';";
					
					if($wynik=@$baza->query($zapytanie))
					{
						$ilu_userow = $wynik->num_rows;
						$wiersz = $wynik->fetch_assoc();
						if($ilu_userow==1)
						{
							$_SESSION['id'] = $wiersz['id'];
							$_SESSION['imie'] = $wiersz['imie'];
							$_SESSION['nazwisko'] = $wiersz['nazwisko'];
							$_SESSION['plec'] = $wiersz['plec'];
							$_SESSION['zalogowany'] = true;
							header("location:glowna.php");
							exit();
						}
						else $errorlogowanie="BŁĘDNE DANE JEŁOPIE";
						
					}
				
				
			}
			else $errorlogowanie="UZUPEŁNIJ TO JEŁOPIE";
			
			echo " <div style='font-size: 50px; color: white; text-align: center;'> $errorlogowanie </div> <script> setTimeout(function(){window.location.href = 'index.php'}, 2000); </script>";
	}
	?>