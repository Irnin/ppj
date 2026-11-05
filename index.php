<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: glowna.php');
		exit();
	}

?>


<html>
<head>
<meta charset="UTF-8"/>
	<title> Somsiedzi PPJ </title>
	<style>
		body
		{
			background-color: #444;
			background-size: cover;
			background-attachment: fixed;
		}
		
		a:visited
		{
		color:black;
		text-decoration:none;
		}
		
		a
		{
		color:black;
		text-decoration:none;
		}
		
		button
		{
			border: 0px;
			background-color: rgba(255,255,255,0);
			cursor: pointer;
		}
	</style>
</head>
<body>
	

	<center>
	<table border="1">
		<tr>
			<td colspan="2" style="background-color: rgba(255, 165, 0,0.6); text-align: center; color: white; font-size: 50px;"> POLSKI PORTAL JANUSZY </td>
		</tr>
		
		<tr style="background-color: rgba(255, 165, 0,0.6); text-align: center; color: white; font-size: 25px;">
			<td> Logowanie </td>
			<td> Rejestracja </td>
		</tr>
		<tr style="background-color: rgba(255, 255, 255,0.6);">
			<td> 
				<form method="post" action="logowanie.php">
					
					<table>
						<tr>
							<td style="text-align: right;"> ID </td>
							<td> <input type="text" name="dejpan"/> </td>
						</tr>
						<tr>
							<td style="text-align: right;"> Hasło </td>
							<td> <input type="password" name="dejpan2"/> </td>
						</tr>
						<tr>
							<td style="text-align: right;">	Zaloguj się</td>
							<td>
							<button type="submit">
								<img src='logowanie.jpg' style="width: 80px"/>
							</button><br/></td>
						</tr>
					</table>
				</form>

			</td>
			<td>
			<form method="post" action="rejestracja.php">
			<table>
				<tr>
					<td style="text-align: right;">	ID</td>
					<td> <input type="text" name="dejpan"/> </td>
				</tr>
				<tr>
					<td style="text-align: right;">	Hasło</td>
					<td> <input type="password" name="dejpan2"/> </td>
				</tr>
				<tr>
					<td style="text-align: right;">	Imie</td>
					<td> <input type="text" name="imie"/> </td>
				</tr>
				<tr>
					<td style="text-align: right;">	Nazwisko</td>
					<td> <input type="text" name="nazwisko"/> </td>
				</tr>
				<tr>
					<td style="text-align: right;">	Płeć</td>
					<td> 
						<select name="plec">
							<option value="m">Mężczyzna</option>
							<option value="z">Zwierzę</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="text-align: right;">	Hasło grupy</td>
					<td> <input type="password" name="dejpan3"/> </td>
				</tr>
				<tr>
					<td style="text-align: right;">	Zarejestruj</td>
					<td>
						<button type="submit">
							<img src='logowanie.jpg' style="width: 80px"/>
						</button><br/>
					</td>
				</tr>
	
			</table>		
		</form>
		</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color: rgba(255, 165, 0,0.6); text-align: center; color: white; font-size: 20px;"> SZFAGIERPOL &copy 2017 </td>
		</tr>
	</table>
	</center>
	
</body>
</html>