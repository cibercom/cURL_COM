<?php

$postRequest = array(
    'firstFieldData' => 'foo',
    'secondFieldData' => 'bar'
);

$cURLConnection = curl_init('http://hostname.tld/api');
curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postRequest);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$apiResponse = curl_exec($cURLConnection);
curl_close($cURLConnection);

// $apiResponse - available data from the API request
$jsonArrayResponse - json_decode($apiResponse);