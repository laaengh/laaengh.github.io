<!doctype html>
<html>
<head>
  <title>Endre biler</title>
  <!-- UTF-8 gjør at vi kan bruke æ, ø og å -->
  <meta charset="UTF-8">  
</head>
<body>
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
			
		//Angi UTF-8 som tegnsett og æ, ø og å vises riktig i databasen
			$tilkobling->set_charset("utf8");
			
		//Datasett som plukker ut fornavn og etternavn til et medlem der informasjonen skal oppdateres.	
		$id=$_GET["oppdaterID"];
		$sql= sprintf("SELECT idreise, land, `by`, klasse, kontakt, dato FROM reise WHERE idreise=$id",
	    $tilkobling->real_escape_string($_GET["oppdaterID"]));
		$datasett=$tilkobling->query($sql);	

		if (isset ($_POST["submit"]))	 
		{	
	    $idreise=$_GET["oppdaterID"];
		$land=$_POST["land"];
		$by=$_POST["by"];
		$klasse=$_POST["klasse"];
        $kontakt=$_POST["kontakt"];
        $dato=$_POST["dato"];
	    $sql= sprintf("UPDATE reise SET land='$land',`by`='$by',klasse='$klasse',kontakt='$kontakt',dato='$dato' WHERE idreise=$idreise", 
		$tilkobling->real_escape_string($land),
		$tilkobling->real_escape_string($by),
		$tilkobling->real_escape_string($klasse),
    	$tilkobling->real_escape_string($kontakt),
		$tilkobling->real_escape_string($dato));
		$tilkobling->query($sql);

		header("Location: admin_dashboard.php");
	    }	
	?>
    
	<form action="" method="post">
	  <?php if($rad=mysqli_fetch_array($datasett)) { ?>
		Land:<input type="text" name="land" id="land" value="<?php echo $rad["land"];?>"/><br><br>
		By:<input type="text" name="by" id="by" value="<?php echo $rad["by"];?>"/><br><br>
        klasse:<input type="text" name="klasse" id="klasse" value="<?php echo $rad["klasse"];?>"/><br><br>
        kontakt:<input type="text" name="kontakt" id="kontakt" value="<?php echo $rad["kontakt"];?>"/><br><br>
		<!-- Merk!! Man fyller et textfelt uten value-->
		Dato:<input type="date" name="dato" id="dato" >
			    <?php echo $rad["dato"]; ?></input><br><br>
		<?php } ?>	
		<button type="submit" name="submit">Oppdater</button><br><br>
    </form>
</body>
</html>
