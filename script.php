<?php
// Define the parameters
$partnerkey = 'radio-koeln';
$platformkey = 'web-radiokoeln-de';
$url = 'https://www.radiokoeln.de/artikel/fall-valeriia-tatverdaechtiger-nach-deutschland-ueberstellt-2039195.html'
$api_key = 'qy_radio_koeln-e54d4431-5dab-474e-b71a-0db1fcb9e659';

// Initialize cURL session
$ch = curl_init();

// Set the URL for the POST request
curl_setopt($ch, CURLOPT_URL, "https://recommender.quantyoo.io/recos/url");

// Set the HTTP method to POST
curl_setopt($ch, CURLOPT_POST, 1);

// Define the POST fields
$postFields = [
    'partnerkey' => $partnerkey,
    'platformkey' => $platformkey,
    'api_key' => $api_key
];

// Set the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postFields));

// Set options to return the response as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL session and store the response
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    // Print the response
    echo 'Response: ' . $response;
}

// Close the cURL session
curl_close($ch);
?>