<?php
	// Account details
$apiKey = urlencode('VexS56IXJho-Cbpofh1JCTQwyhykr4TnLPi3tO132t');

	// Message details
	$numbers = $_POST['number'];
	$sender = urlencode('TXTLCL');
	$message = $_POST['message'];


	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);

	// Process your response here
	echo $response;
?>
