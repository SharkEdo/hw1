<?php 
/*******************************************************
    Ritorna un JSON con i risultati dell'API selezionata
********************************************************/
require_once 'auth.php';

// Se la sessione è scaduta, esco
if (!checkAuth()) exit;

// Imposto l'header della risposta
header('Content-Type: application/json');

Nasa_command();

function Nasa_command() {

    // QUERY EFFETTIVA
	$query = urlencode($_GET["q"]);
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "https://images-api.nasa.gov/search?q=".$query);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($curl);
	curl_close($curl);

	echo($result);
}

?>