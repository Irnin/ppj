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
		.avatar2
		{
			width: 50px;
			height: 50px;
		}
	
		body
		{
			background-color: #444;
			background-image: url("tlo.png");
			background-size: cover;
			background-attachment: fixed;
		}
		
		button
		{
			border: 0px;
			background-color: rgba(255,255,255,0);
			cursor: pointer;
		}
	</style>
</head>
<body onload="document.getElementById('tablica').style.display='block'; document.getElementById('znajomi').style.display='none'; document.getElementById('zapros').style.display='none';">
	
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
			<td rowspan='2' style="background-color: rgb(231, 111, 28); vertical-align: top; width: 100px;"> 
	
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
			<td colspan="2" style="text-align: right; background-color: rgb(231, 111, 28); height: 10px;">
				<a onclick="document.getElementById('tablica').style.display='block'; document.getElementById('znajomi').style.display='none'; document.getElementById('zapros').style.display='none';" style="cursor: pointer"> <img src="table.png"/> </a> 
				<a onclick="document.getElementById('tablica').style.display='none'; document.getElementById('znajomi').style.display='block'; document.getElementById('zapros').style.display='none';" style="cursor: pointer"> <img src="somsiedzi.png"/> </a> 
				
				<?php
				if($_GET['id']==$_SESSION['id']) echo "<a onclick='document.getElementById('tablica').style.display='none'; document.getElementById('znajomi').style.display='none'; document.getElementById('zapros').style.display='block';' style='cursor: pointer'> <img src='dodaj.png'/> </a>"; 
			
				?>
			</td>
		</tr>
		
		<tr>
			
			<td style="background-color: rgb(200,200,200); width: 900px; padding: 5px; vertical-align: top;"> 
		<div id="tablica">
			<h1> Tablica </h1>
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
							mysqli_query($baza,"insert into posty values(null, $id , '$tresc' , now(), 'a');");
						}

					}
			
					mysqli_close($baza);
				}
				$_POST = array();
			?>
			<?php
				if($_GET['id']==$_SESSION['id'])
				{
					echo"
					<form method='post' style='text-align: right;'>
						<textarea name='tresc' rows='10' cols='110' style=' resize: none;'></textarea>
						<br/>
						<a href='glowna.php'> 
							<button type='submit'>
								<img src='kur.png'/>
							</button>
						</a>
					</form>
					";
				}
			?>
			<?php
				require_once"connect.php";
				
				$baza=@mysqli_connect($server,$user,$password,$database);
			
				$id_obecne=$_GET['id'];
				$okiii="select imie, nazwisko, tresc, data_dodania, id_uzytkownika, posty.id from posty,users where users.id=posty.id_uzytkownika and id_uzytkownika=$id_obecne order by posty.id desc;";
				$zapytanie=mysqli_query($baza,$okiii);
				$wiersz=mysqli_num_rows($zapytanie);
				
				
				while($wiersz=mysqli_fetch_array($zapytanie))
				{
					$idpostu=$wiersz[5];
					
					echo "<table >";
						echo "<tr>";
							echo "<td style='vertical-align: top; width: 140px;'><center>";
							echo "<a href='profil.php?id=".$wiersz[4]."' style='cursor: pointer;'> <img class='avatar' src='avatary/".$wiersz[4].".jpg'/> </a><br/>";
							echo $wiersz[0]." ".$wiersz[1]."<br/>";
							echo "</td>";
							echo "<td style='vertical-align: top;'>";
							echo $wiersz[2];
							echo "</center></td>";
						
						
						echo "</tr>";
						
						echo "<tr >";
							echo "<td style='vertical-align: bottom;'>".$wiersz[3];
							echo "</td>";
							echo "<td style='vertical-align: bottom;'>";
								$zapytanie2=mysqli_query($baza,"select * from browary");
								$wiersz2=mysqli_num_rows($zapytanie2);
								$a=0;
								$b=0;
								$c=0;
								$d=0;
								while($wiersz2=mysqli_fetch_array($zapytanie2))
								{
									if($wiersz2[1]==$wiersz[5]) 
									{
											if($wiersz2[3]=="a") $a++;																		
											if($wiersz2[3]=="b") $b++;																		
											if($wiersz2[3]=="c") $c++;																		
											if($wiersz2[3]=="d") $d++;																		
									}
								}
								
								$id_postu=$wiersz[5];
								$profil=$_GET['id'];
								echo "<table style='text-align: center;'";
								echo "<tr>";
								echo "<td> <a href='skrypty/reakcja.php?id=$id_postu&reakcja=a&powrut=profil&profil=$profil'><img src='ico/polewaj.png'/></a> </td>";
								echo "<td> <a href='skrypty/reakcja.php?id=$id_postu&reakcja=b&powrut=profil&profil=$profil'><img src='ico/kiedys.png'/></a> </td>";
								echo "<td> <a href='skrypty/reakcja.php?id=$id_postu&reakcja=c&powrut=profil&profil=$profil'><img src='ico/kurr.png'/></a> </td>";
								echo "<td> <a href='skrypty/reakcja.php?id=$id_postu&reakcja=d&powrut=profil&profil=$profil'><img src='ico/zlodziej.png'/></a> </td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td> $a </td>";
								echo "<td> $b </td>";
								echo "<td> $c </td>";
								echo "<td> $d </td>";
								echo "</tr>";
								echo "</table>";
								
								
							echo "</td>";
						
						
						echo "</tr>";
						
						echo "<tr>";
							echo "<td style='vertical-align: top; width: 140px;'><center>";
							echo "</td>";
							echo "<td rowspan='2' style='vertical-align: top;'>";
							
							echo"
								<form method='post' action='komentarze.php?id=$idpostu'>
									<textarea name='tresc' rows='4' cols='92' style=' resize: none;'></textarea>
									<br/>
									<a href='glowna.php'>
										<button type='submit'>
											<img src='kur2.png'/>
										</button> </a>
								</form>
							";
							
								$zapytanie1=mysqli_query($baza,"select * from komentarze,users where users.id=komentarze.id_uzytkownika order by komentarze.id desc;");
								$wiersz1=mysqli_num_rows($zapytanie1);
								echo "<table>";
								while($wiersz1=mysqli_fetch_array($zapytanie1))
								{
									if($wiersz1[2]==$wiersz[5]) 
									{
										
											echo "<tr>";
												echo "<td style='vertical-align: top; width: 140px;'><center>";
												echo "<a href='profil.php?id=".$wiersz1[1]."' style='cursor: pointer;'> <img class='avatar2' src='avatary/".$wiersz1[5].".jpg'/> </a><br/>";
												echo $wiersz1[8]." ".$wiersz1[9]."<br/>";
												echo "</td>";
												echo "<td rowspan='2' style='vertical-align: top;'>";
												echo $wiersz1[3];
												echo "</center></td>";
											echo "</tr>";
											
											echo "<tr >";
												echo "<td style='vertical-align: bottom;'>".$wiersz1[4]; echo "</td>";
											echo "</tr>";																				
									}
								}
								echo "</table>";
							
							echo "</center></td>";
						
						
						echo "</tr>";
					
					echo "</table> <hr/>";
					
				}
				mysqli_close($baza);
			
			?>		
			</div>
			<div id="znajomi">
				<h1> Somsiedzi </h1>
				<?php
					$baza=@mysqli_connect($server,$user,$password,$database);
				
					$id_obecne=$_GET['id'];
					$okiii="select * from users where id in(select id_somsiada1 from znajomi where id_somsiada2=$id_obecne and status='a') or id in(select id_somsiada2 from znajomi where id_somsiada1=$id_obecne  and status='a');";
					$zapytanie=mysqli_query($baza,$okiii);
					$wiersz=mysqli_num_rows($zapytanie);
					
					
					while($wiersz=mysqli_fetch_array($zapytanie))
					{
						echo "<table style='width: 100px; text-align: center; float: left;'> <tr>";
						echo "<td> <a href='profil.php?id=".$wiersz[0]."' style='cursor: pointer;'> <img class='avatar' src='avatary/".$wiersz[0].".jpg'/> </a></td>";
						
						echo "</tr> <tr>";
						echo "<td> <center>$wiersz[3] $wiersz[4] </center></td>"; 
						echo "</tr></table>";
					}
					mysqli_close($baza);
					
					echo "<div style='clear: both'> </div>"
				?>
				
				
				
			</div>
			<div id="zapros">
				
				<h1> Zaproszenia </h1>
				<?php
					$baza=@mysqli_connect($server,$user,$password,$database);
				
					$id_obecne=$_GET['id'];
					$okiii="select * from users where id in(select id_somsiada2 from znajomi where id_somsiada1=$id_obecne  and status='o');";
					$zapytanie=mysqli_query($baza,$okiii);
					$wiersz=mysqli_num_rows($zapytanie);
					
					
					while($wiersz=mysqli_fetch_array($zapytanie))
					{
						echo "<table> <tr>";
						echo "<td> <a href='profil.php?id=".$wiersz[0]."' style='cursor: pointer;'> <img class='avatar' src='avatary/".$wiersz[0].".jpg'/> </a></td>";
						
						echo "</tr> <tr>";
						echo "<td> <center>$wiersz[3] $wiersz[4] </center></td>"; 
						echo "</tr>";
						echo "<tr>";
						echo "<td>";
						echo "<left> <a href='akceptuj.php?id=$wiersz[0]&tryb=nie'> <img src='notok.png'/> </a> </left>";
						echo "<right> <a href='akceptuj.php?id=$wiersz[0]&tryb=tak'> <img src='ok.png'/> </a></right>";
						
						echo"</td>"; 
						echo "</tr>";
						echo "</table>";
					}
					mysqli_close($baza);
				?>
				
				
				
			</div>
		</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color: rgb(231, 111, 28); text-align: center; color: white; font-size: 20px;"> SZFAGIERPOL &copy 2017 </td>
		</tr>
	</table>
	</center>
		
</body>
</html>