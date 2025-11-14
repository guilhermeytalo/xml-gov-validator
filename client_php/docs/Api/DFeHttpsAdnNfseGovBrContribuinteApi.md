# OpenAPI\Client\DFeHttpsAdnNfseGovBrContribuinteApi



All URIs are relative to https://sefin.nfse.gov.br/sefinnacional, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**dFeNSUGet()**](DFeHttpsAdnNfseGovBrContribuinteApi.md#dFeNSUGet) | **GET** /DFe/{NSU} | Distribui os DF-e para contribuintes relacionados à NFS-e. |
| [**nFSeChaveAcessoEventosGet()**](DFeHttpsAdnNfseGovBrContribuinteApi.md#nFSeChaveAcessoEventosGet) | **GET** /NFSe/{ChaveAcesso}/Eventos | Distribui os DF-e vinculados à chave de acesso informada |


## `dFeNSUGet()`

```php
dFeNSUGet($nsu, $lote): \OpenAPI\Client\Model\LoteDistribuicaoNSUResponse
```

Distribui os DF-e para contribuintes relacionados à NFS-e.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DFeHttpsAdnNfseGovBrContribuinteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$nsu = 56; // int
$lote = true; // bool

try {
    $result = $apiInstance->dFeNSUGet($nsu, $lote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DFeHttpsAdnNfseGovBrContribuinteApi->dFeNSUGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nsu** | **int**|  | |
| **lote** | **bool**|  | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\LoteDistribuicaoNSUResponse**](../Model/LoteDistribuicaoNSUResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nFSeChaveAcessoEventosGet()`

```php
nFSeChaveAcessoEventosGet($chave_acesso): \OpenAPI\Client\Model\LoteDistribuicaoNSUResponse
```

Distribui os DF-e vinculados à chave de acesso informada

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DFeHttpsAdnNfseGovBrContribuinteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chave_acesso = 'chave_acesso_example'; // string

try {
    $result = $apiInstance->nFSeChaveAcessoEventosGet($chave_acesso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DFeHttpsAdnNfseGovBrContribuinteApi->nFSeChaveAcessoEventosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chave_acesso** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\LoteDistribuicaoNSUResponse**](../Model/LoteDistribuicaoNSUResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
