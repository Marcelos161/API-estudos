<?php 

define('API_BASE', 'http://localhost/api%20com%20php/api/?option=');

echo '<h1>APLICAÇAO</h1><hr>';

for($i = 0; $i<10; $i++) {

    $resultado = api_request('random');

    // verificaçao de resposta da API
    if($resultado['status'] == 'ERROR') {
        die('Aconteceu um erro ao chamar a API');
    }

    echo "O valor randomico: " . $resultado['data']. "<br>";
}

echo "Terminado";


echo '<pre>';
print_r($resultado);
echo '</pre>';

function api_request($option) {
    $client = curl_init(API_BASE . $option);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    
    return json_decode($response, true);
}


?>