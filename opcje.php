<?php

	session_start();
	
	if (!(isset($_SESSION['zalogowany'])) && !($_SESSION['zalogowany']==true))
	{
		header('Location: index.php');
		exit();
	}

?>

<html>
<head>
<meta charset="UTF-8"/>
	<title> Polski Portal Januszy </title>
	<style>
		.avatar
		{
			width: 100px;
			height: 100px;
		}
	
		body
		{
			background-image: url("tlo.png");
			background-color: #444;
			background-size: cover;
			background-attachment: fixed;
		}
	</style>
</head>
<body>
	
	<center>
	<table border="1" >
		<tr>
			<td colspan="2" style="background-color: rgb(231, 111, 28); text-align: center; cursor: pointer; color: white; font-size: 50px;" onclick="window.location.href = 'glowna.php';">  <img src="baner.png" style="width: 100%;"/> </td>
		</tr>
		<tr>
			<td colspan="2" style="background-color: rgb(231, 111, 28); text-align: right; padding: 5px;">
				
				<form method="post" action="zapros.php" style="float: left; margin: 0px;">
					<input type="text" name="imie" style="height: 32px; width: 300px;"/><input type="submit" value="Wyszukaj somsiada" style="height: 32px;"/>
				</form>
			
				<div style="float: right; margin: 0px;">
				<a <?php $id=$_SESSION['id']; echo "href='profil.php?id=$id'"; ?>><img src="profil.png"/></a>
				<a href="opcje.php"><img src="option.png"/></a>
				<a href="logout.php"> <img src="exit.png"/> </a>
				</div >
				<div style="clear: both"/>
			</td>
		</tr>
		<tr>
			<td style="background-color: rgb(231, 111, 28); vertical-align: top; width: 100px;"> 
				
				<?php		
				require_once"connect.php";
				$baza=@mysqli_connect($server,$user,$password,$database);
			
				$zapytanie=mysqli_query($baza,"select * from nowosci order by id desc limit 10;");
				$wiersz=mysqli_num_rows($zapytanie);
				
				echo "<center>NOWOSCI:</center><ol>";
				while($wiersz=mysqli_fetch_array($zapytanie))
				{
					echo "<li>".$wiersz[1]."</li>";
				}
				echo "</ol>";
					

				mysqli_close($baza);
			
			?>

			</td>
			
			<td style="background-color: rgb(200,200,200); width: 900px; padding: 5px; vertical-align: top;"> 
				

		</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color: rgb(231, 111, 28); text-align: center; color: white; font-size: 20px;"> SZFAGIERPOL &copy 2017 </td>
		</tr>
	</table>
	</center>
		
</body>
</html>