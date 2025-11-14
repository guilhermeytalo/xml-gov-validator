# OpenAPI\Client\DANFSeHttpsSefinNfseGovBrSefinnacionalApi



All URIs are relative to https://sefin.nfse.gov.br/sefinnacional, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**dANFSeGet()**](DANFSeHttpsSefinNfseGovBrSefinnacionalApi.md#dANFSeGet) | **GET** /danfse/{chaveAcesso} | Retorna o DANFSe de uma NFS-e a partir de sua chave de acesso. |


## `dANFSeGet()`

```php
dANFSeGet($chave_acesso): object
```

Retorna o DANFSe de uma NFS-e a partir de sua chave de acesso.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DANFSeHttpsSefinNfseGovBrSefinnacionalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chave_acesso = 'chave_acesso_example'; // string

try {
    $result = $apiInstance->dANFSeGet($chave_acesso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DANFSeHttpsSefinNfseGovBrSefinnacionalApi->dANFSeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chave_acesso** | **string**|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
