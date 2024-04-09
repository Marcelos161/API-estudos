<?php 

define('API_BASE', 'http://localhost/api%20com%20php/api/?option=');

echo '<h1>APLICAÇAO</h1><hr>';


echo '<pre>';
print_r(api_request('status'));
echo '</pre>';

function api_request($option) {
    $client = curl_init(API_BASE . $option);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    
    return json_decode($response, true);
}


?>