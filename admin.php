<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
  * {
    border: solid 2px blue;
  }
  </style>
</head>
<body>
<h1>Registrere reiser</h1><br>
	  <form action="" method="post">
		Land:<input type="text" name="reise_regnr" id="reise_regnr"/><br><br>
		By:<input type="text" name="reise_sted" id="reise_sted"/><br><br>
		Klasse:<input type="text" name="reise_klasse" id="reise_klasse"/><br><br>
		Kontakt Person:<input type="text" name="reise_kontakt" id="reise_kontakt"/><br><br>
		Dato: <input type="date" name="reise_tid" id="reise_tid" cols=50" rows="10"></textarea>

		<button type="submit" name="submit">Send inn</button><br><br>
      </form>
	
	  <?php
		//Tilkoblingsinformasjon
		$servernavn = "localhost";
		$brukernavn = "root";
		$passord = "";
		$dbnavn = "reiser";
		
		//Oppretter en kobling
		$tilkobling = mysqli_connect($servernavn, $brukernavn, $passord, $dbnavn);
		
		// Sjekker koblingen fungerer
			if ($tilkobling->connect_error) {
			die("Noe gikk galt: " . $tilkobling->connect_error);
			} 
		//Angi UTF-8 som tegnsett og æ, ø og å vises r
			$tilkobling->set_charset("utf8");
		
		//Sjekker om send-knappen i html-skjemaet er aktivert (trykket ned)	
		if (isset ($_POST["submit"]))	 
		{	
		//Lagrer inndata fra skjemafeltene i variabler med enklere navn som benyttes nedenfor
			$land=$_POST["reise_regnr"];
			$by=$_POST["reise_sted"];
			$klasse=$_POST["reise_klasse"];
			$kontakt=$_POST["reise_kontakt"];
			$dato=$_POST["reise_tid"];
	
		//SQL insert-setning sendes til databasen sammen med verdiene fra tekstboksene	
			$sql= sprintf("INSERT INTO reise(land,`by` ,klasse,kontakt,dato) VALUES('$land','$by','$klasse','$kontakt','$dato')",
			$tilkobling->real_escape_string($land),
			$tilkobling->real_escape_string($by),
			$tilkobling->real_escape_string($klasse),
			$tilkobling->real_escape_string($kontakt),
			$tilkobling->real_escape_string($dato));
			
		//Sjekker om SQL-setningen ble gjennomført og om dataene er på plass i databasen	
			if($tilkobling->query($sql))	{
				echo "Spørringen ble gjennomført.";
        header ("Location: admin.php");
			}

			else {
				echo "Noe gikk galt med spørringen $sql($tilkobling->error).";
			}	
		}	
				//SQL select-setning sendes til databasen sammen med verdiene fra tekstboksene	
				$sql= sprintf("SELECT idreise,land,`by`,klasse,kontakt,dato FROM reise");
				$datasett=$tilkobling->query($sql);

				if (isset ($_GET["slettID"]))	{
					$parameter=$_GET["slettID"];
					$sql=sprintf("DELETE FROM reise WHERE idreise=$parameter",
					$tilkobling->real_escape_string($parameter));
					$tilkobling->query($sql);	
				}	
				

	  ?>
	
	<?php
		//SQL select-setning henter data fra databasen	
			$sql= sprintf("SELECT idreise,land,`by`,klasse,kontakt,dato FROM reise");
			$datasett=$tilkobling->query($sql);
	  ?>

	  <table>
	    <tr>
		  <th>Land</th>
		  <th>By</th>
		  <th>Klasse</th>
		  <th>Kontakt Person</th>
		  <th>Dato</th>
		</tr>
		<?php while ($rad=mysqli_fetch_array($datasett)) {?>
		<tr>
		  <td><?php echo $rad["land"];?></td>
		  <td><?php echo $rad["by"];?></td> 
		  <td><?php echo $rad["klasse"];?></td> 
		  <td><?php echo $rad["kontakt"];?></td> 
		  <td><?php echo $rad["dato"];?></td> 
		  <td><a href="?slettID=<?php echo $rad["idreise"];?>">Slett</a></td>
		  <td><a href="oppdaterreise.php?oppdaterID=<?php echo $rad["idreise"];?>">Endre</a></td>
		</tr> 
        <?php } ?>		
	  </table>
</body>
</html>
    
</body>
</html>