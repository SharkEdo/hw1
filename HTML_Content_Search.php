<?php



require_once 'auth.php';


if (!checkAuth()) exit;


header ('Content-type: application/json');

HtmlCommand();

function HtmlCommand(){

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "https://html-library.free.beeceptor.com/json");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$result= curl_exec($curl);
	curl_close($curl);
	echo($result);

}

?>