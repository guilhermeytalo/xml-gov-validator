# OpenAPI\Client\DPSHttpsSefinNfseGovBrSefinnacionalApi



All URIs are relative to https://sefin.nfse.gov.br/sefinnacional, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**dpsGet()**](DPSHttpsSefinNfseGovBrSefinnacionalApi.md#dpsGet) | **GET** /dps/{id} | Retorna a chave de acesso da NFS-e a partir do identificador do DPS. |
| [**dpsHead()**](DPSHttpsSefinNfseGovBrSefinnacionalApi.md#dpsHead) | **HEAD** /dps/{id} | Verifica se uma NFS-e foi emitida a partir do Id do DPS |


## `dpsGet()`

```php
dpsGet($id): \OpenAPI\Client\Model\DpsGetResponse
```

Retorna a chave de acesso da NFS-e a partir do identificador do DPS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DPSHttpsSefinNfseGovBrSefinnacionalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identificador do DPS

try {
    $result = $apiInstance->dpsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPSHttpsSefinNfseGovBrSefinnacionalApi->dpsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identificador do DPS | |

### Return type

[**\OpenAPI\Client\Model\DpsGetResponse**](../Model/DpsGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dpsHead()`

```php
dpsHead($id)
```

Verifica se uma NFS-e foi emitida a partir do Id do DPS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DPSHttpsSefinNfseGovBrSefinnacionalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identificador do DPS

try {
    $apiInstance->dpsHead($id);
} catch (Exception $e) {
    echo 'Exception when calling DPSHttpsSefinNfseGovBrSefinnacionalApi->dpsHead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identificador do DPS | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
