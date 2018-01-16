<?php 

	echo "<pre>" . print_r ($_POST,1) . "</pre>"; 

	$titel = filter_input(INPUT_POST, "title", FILTER_SANTIZE_SPECIAL_CHARS); 

	echo $title; 



 $dbh = new PDO("mysql:host=localhost;dbname=anslagstavla;charset=utf8" , "root", "", array ( 
 		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
		));

 if(isset($_POST['publicera'])) {
 	 $sql = "INSERT INTO anslagstavla (titel, organ, ansvarig, forvaringsplats, stub,
 	 		 uppsattning, sammantrade)
 	 		 	VALUES(:titel, :organ, :ansvarig, :forvaringsplats, :stub, :uppsattning, :sammantrade)";
 	 		$stmt = $dbh -> prepare($sql); 
 }