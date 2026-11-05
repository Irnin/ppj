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
		.avatar2
		{
			width: 50px;
			height: 50px;
		}
	
		body
		{
			background-color: #444;
			background-size: cover;
			background-attachment: fixed;
			color: #fff;
		}
		table
		{
			float: left;
		}
	</style>
</head>

<body>
<center>
<table style="margin: auto;">
<tr>
<td>
<h1> Proponowani znajomi: </h1>
</td>
</tr>
<tr>
<td>
<?php

	session_start();
	require_once"connect.php";
	
	if($_POST)
	{
		$baza=@mysqli_connect($server,$user,$password,$database);
			
		$okiii="select * from users where concat(imie,' ',nazwisko) like '%".$_POST['imie']."%' and id <>".$_SESSION['id'].";";
		$zapytanie=mysqli_query($baza,$okiii);
		$wiersz=mysqli_num_rows($zapytanie);
			
						
		while($wiersz=mysqli_fetch_array($zapytanie))
		{
			echo "<table> <tr>";
			echo "<td> <a href='profil.php?id=".$wiersz[0]."' style='cursor: pointer;'> <img class='avatar' src='avatary/".$wiersz[0].".jpg'/> </a></td>";
					
			echo "</tr> <tr>";
			echo "<td> <center>$wiersz[3] <br/> $wiersz[4] </center></td>"; 
			echo "<tr><td><center> <a href='zapros.php?id=".$wiersz[0]."'> <img src='add.png'/> <br> Zaproś </a></center></td></tr>";
			echo "</tr></table>";
		}
		mysqli_close($baza);
	}
	
	if($_GET)
	{
		$baza=@mysqli_connect($server,$user,$password,$database);
		
		$okiii="insert into znajomi values(null, ".$_GET['id'].", ".$_SESSION['id'].", now(), 'o');";


		mysqli_query($baza,$okiii);
		mysqli_close($baza);
		header('Location: glowna.php');
	exit();
	}
	
	
?>
</td>
</tr>
<tr>
	<td> <a href="glowna.php"> Powrut </a></td>
</tr>
</table>
</center>
</body>
</html>