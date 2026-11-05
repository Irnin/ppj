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
<body>
	<?php
		require_once"connect.php";
		$errorlogowanie="";
	
		if($_POST)
		{
			if($_POST['dejpan']!=""and$_POST['dejpan2']!=""and$_POST['imie']!=""and$_POST['nazwisko']!=""and$_POST['dejpan3']!="")
			{	
			$login=$_POST['dejpan'];
			$haslo=$_POST['dejpan2'];
			$imie=$_POST['imie'];
			$nazwisko=$_POST['nazwisko'];
			$plec=$_POST['plec'];
			$haslogrupy=$_POST['dejpan3'];
				if($haslogrupy=="zarazcipodam")
				{
				$baza=@mysqli_connect($server,$user,$password,$database);
				
				$zapytanie="insert into users values(null, '$login', '$haslo', '$imie', '$nazwisko', '$plec')";
				
				mysqli_query($baza,$zapytanie);
				
				header("location:index.php");
				}
				else $errorlogowanie="NIE JESTES SOMSIADEM WYPIERDALAJ!!!";
			}
			else $errorlogowanie="UZUPEŁNIJ TO JEŁOPIE";
			
		}
		
		echo " <div style='font-size: 50px; color: white; text-align: center;'> $errorlogowanie </div> <script> setTimeout(function(){window.location.href = 'index.php'}, 2000); </script>";

	?>

</body>