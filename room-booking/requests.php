<?php

error_reporting(0);

$bdd = mysqli_connect('localhost', 'root', '', 'dbbooking');

mysql_query("SET NAMES UTF8");

if($bdd) {
	
	//On récupère l'id de la salle sélectionnée par l'utilisateur
	$room = $_POST['room'];
		
	if($_POST['request'] == "getBookings") {

		//On récupère les réservations de la salle sélectionnée
		$request = "SELECT * FROM booking WHERE id_rooms=$room";
		
		//On affiche les résultats
		$result = $bdd->query($request);
		
		if ($result->num_rows > 0) {
			
			while($row = $result->fetch_assoc()) {
				
				print $row["booking_date"]."||";
				
			}
			
			
		} else {
			
			print "0 resultat";
			
		}
		

	} else if($_POST['request'] == "setBooking") {
		
		$request = "INSERT INTO `booking`(`booking_duration`, `booking_date`, `booking_notes`, `id_user`, `id_rooms`) VALUES 
('1','".$_POST['date']."','Réunion pour débuter le projet Gestionnaire de Réservation de Salles', '1', '".$_POST['room']."')";
		
		$result = $bdd->query($request);

	} else {
		
		print "Vous devez définir le type de la requête.";

	}

// Si la connexion a réussi, rien ne se passe.
} else {
	
	print "Erreur lors de la connection"; // On affiche un message d'erreur.
	
}

mysql_close($bdd);

//try {
//    $dbh = new PDO('mysql:host=localhost;dbname=dbbooking', "root", "");
//    foreach($dbh->query('SELECT * from booking') as $row) {
//        print_r($row);
//    }
//    $dbh = null;
//} catch (PDOException $e) {
//    print "Erreur !: " . $e->getMessage() . "<br/>";
//    die();
//}

?>