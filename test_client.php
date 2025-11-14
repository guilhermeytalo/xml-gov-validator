<?php
// test_client.php

require_once(__DIR__ . '/client_php/vendor/autoload.php');

// It's recommended to set the host in the configuration
// Using the production endpoint as documented
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setHost('https://sefin.nfse.gov.br/sefinnacional');

// Create an instance of the API class
$apiInstance = new OpenAPI\Client\Api\ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi(
    // It's recommended to provide a GuzzleHttp\Client instance
    new GuzzleHttp\Client(),
    $config
);

// Example municipality code (IBGE code for Itajaí/SC, which we used before)
$codigo_municipio = 4208203; 

echo "Testing with municipality code: " . $codigo_municipio . PHP_EOL;

try {
    // Call the API
    $result = $apiInstance->convenioGet($codigo_municipio);
    
    // Print the result
    echo "API Call Successful!" . PHP_EOL;
    echo "Response:" . PHP_EOL;
    print_r($result);

} catch (OpenAPI\Client\ApiException $e) {
    echo 'Caught API Exception: ', $e->getMessage(), PHP_EOL;
    echo 'HTTP Status Code: ', $e->getCode(), PHP_EOL;
    echo 'Response Body: ', $e->getResponseBody(), PHP_EOL;
} catch (Exception $e) {
    echo 'Caught General Exception: ', $e->getMessage(), PHP_EOL;
}
