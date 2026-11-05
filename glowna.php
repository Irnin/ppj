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
	<link rel="Shortcut icon" href="adres ikony" />
	
	<link rel="shortcut icon" href="ico,ico">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript">
            
			function wypisz()
			{
				jQuery(document).ready(function($){
					var resp = $("#response");
					$.ajax({
						type: "POST", // Method type GET/POST           
						url: "skrypty/posty.php", //Ajax Action url
						data: {},

						// Before call ajax you can do activity like please wait message
						beforeSend: function(xhr){
							
						},

						//Will call if method not exists or any error inside php file
						error: function(qXHR, textStatus, errorThrow){
							resp.html("There are an error");
						},

						success: function(data, textStatus, jqXHR){
							resp.html(data);
						}
					});
				});
				
			}
			
			/*function elo()
			{
				
				if(stop!=true)
				{
				
					wypisz();
				  setTimeout(function () {
					elo();
					
				  }, 3000);
				}
			
				
			}*/
			wypisz();

        </script>


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
			background-image: url("tlo.png");
		}
		
		button
		{
			border: 0px;
			background-color: rgba(255,255,255,0);
			cursor: pointer;
		}
	</style>
</head>
<body onload="elo()">
	
	<center>
	<table>
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
			
			<?php
				
				require_once"connect.php";
				
				if($_POST)
				{
					$tresc=$_POST['tresc'];
					
					$baza=@mysqli_connect($server,$user,$password,$database);
					$zapytanie="select*from posty where id_uzytkownika='".$_SESSION['id']."' order by id desc limit 1;";
					
					if($wynik=@$baza->query($zapytanie))
					{
						$wiersz = $wynik->fetch_assoc();
						
						if($wiersz['tresc']!=$tresc)
						{
							$id=$_SESSION['id'];
							mysqli_query($baza,"insert into posty values(null, $id , '$tresc' , now(),'a');");
						}

					}
			
					mysqli_close($baza);
				}
				$_POST = array();
			?>
		
			<form method="post" style="text-align: right;">
				<textarea name="tresc" rows="6" cols="112" style=" resize: none;"></textarea>
				<br/>
				<a href="glowna.php" > 
					<button type="submit">
						<img src='kur.png'/>
					</button>
				</a>
			</form>
			

			<?php
				
				//include'skrypty/posty.php';
			?>		
			<div id="response"></div>
		</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color: rgb(231, 111, 28); text-align: center; color: white; font-size: 20px;"> SZFAGIERPOL &copy 2017 </td>
		</tr>
	</table>
	</center>
		
		
</body>
</html>