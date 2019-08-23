<?php

$link = "https://api.lifx.com/v1/lights/all";
$authToken = "cb23f82e367123e90803d1b12f0b0b5978a18f4c9f403c69e5f1222b9a0b1bb5";
$ch = curl_init($link);
$headers = array('Authorization: Bearer ' . $authToken);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);

print_r($response)

  //test
?>
