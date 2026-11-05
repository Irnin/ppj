<?php

				require_once"../connect.php";
				session_start();
				
				$baza=@mysqli_connect($server,$user,$password,$database);
				
				$id_obecne=$_SESSION['id'];
				//and (
				$zapytanie=mysqli_query($baza,"select imie, nazwisko, tresc, data_dodania, id_uzytkownika, posty.id from posty,users where users.id=posty.id_uzytkownika and (posty.id_uzytkownika in(select id_somsiada1 from znajomi where id_somsiada2=$id_obecne and status='a') or posty.id_uzytkownika in(select id_somsiada2 from znajomi where id_somsiada1=$id_obecne  and status='a') or id_uzytkownika=$id_obecne) order by posty.id desc;");
				$wiersz=mysqli_num_rows($zapytanie);
				
				
				while($wiersz=mysqli_fetch_array($zapytanie))
				{
					$idpostu=$wiersz[5];
					
					echo "<table border='0'>";
						echo "<tr>";
							echo "<td style='vertical-align: top; width: 140px;'><center>";
							echo "<a href='profil.php?id=".$wiersz[4]."' style='cursor: pointer;'> <img class='avatar' src='avatary/".$wiersz[4].".jpg'/> </a><br/>";
							echo $wiersz[0]." ".$wiersz[1]."<br/>";
							echo "</td>";
							echo "<td style='vertical-align: top;'>";
							echo $wiersz[2];
							echo "</td>";
						
						
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
								
								echo "<table style='text-align: center; float: left;'";
								echo "<tr>";
								echo "<td> <a href='skrypty/reakcja.php?id=$id_postu&reakcja=a&powrut=glowna'><img src='ico/polewaj.png'/></a> </td>";
								echo "<td> <a href='skrypty/reakcja.php?id=$id_postu&reakcja=b&powrut=glowna'><img src='ico/kiedys.png'/></a> </td>";
								echo "<td> <a href='skrypty/reakcja.php?id=$id_postu&reakcja=c&powrut=glowna'><img src='ico/kurr.png'/></a> </td>";
								echo "<td> <a href='skrypty/reakcja.php?id=$id_postu&reakcja=d&powrut=glowna'><img src='ico/zlodziej.png'/></a> </td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td> $a </td>";
								echo "<td> $b </td>";
								echo "<td> $c </td>";
								echo "<td> $d </td>";
								echo "</tr>";
								echo "</table>";
								if($wiersz[4]==$_SESSION['id']) echo "<div style='float: right'> <a href='skrypty/usun.php?id=$id_postu'> <img src='ico/kosz.png'/> </a> </div>";
								
								
							echo "</td>";
						echo "</tr>";
						
						echo "<tr>";
							echo "<td style='vertical-align: top; width: 140px;'><center>";
							echo "</td>";
							echo "<td rowspan='2' style='vertical-align: top;'>";
							
							echo"
								<form method='post' action='komentarze.php?id=$idpostu'>
									<textarea name='tresc' rows='4' cols='92' style=' resize: none;' onclick='(stop=true)'></textarea>
									<br/>
									<a href='glowna.php' onclick='(stop=false)'>
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
												echo "</center> </td>";
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