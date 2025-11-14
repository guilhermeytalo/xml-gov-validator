# OpenAPI\Client\NFSEHttpsSefinNfseGovBrSefinnacionalApi



All URIs are relative to https://sefin.nfse.gov.br/sefinnacional, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**nFSeGet()**](NFSEHttpsSefinNfseGovBrSefinnacionalApi.md#nFSeGet) | **GET** /nfse/{chaveAcesso} | Retorna a NFS-e a partir da consulta pela chave de acesso correspondente (50 posições). |
| [**nFSePost()**](NFSEHttpsSefinNfseGovBrSefinnacionalApi.md#nFSePost) | **POST** /nfse | Recepciona a DPS e Gera a NFS-e de forma síncrona. |


## `nFSeGet()`

```php
nFSeGet($chave_acesso): \OpenAPI\Client\Model\NFSeGetResponseSucesso
```

Retorna a NFS-e a partir da consulta pela chave de acesso correspondente (50 posições).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NFSEHttpsSefinNfseGovBrSefinnacionalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chave_acesso = 'chave_acesso_example'; // string

try {
    $result = $apiInstance->nFSeGet($chave_acesso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NFSEHttpsSefinNfseGovBrSefinnacionalApi->nFSeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chave_acesso** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\NFSeGetResponseSucesso**](../Model/NFSeGetResponseSucesso.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nFSePost()`

```php
nFSePost($nfse_post_request): \OpenAPI\Client\Model\NFSePostResponseSucesso
```

Recepciona a DPS e Gera a NFS-e de forma síncrona.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NFSEHttpsSefinNfseGovBrSefinnacionalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$nfse_post_request = new \OpenAPI\Client\Model\NFSePostRequest(); // \OpenAPI\Client\Model\NFSePostRequest | Estrutura contendo um DPS compactado no padrão gZip (base64Binary)

try {
    $result = $apiInstance->nFSePost($nfse_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NFSEHttpsSefinNfseGovBrSefinnacionalApi->nFSePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nfse_post_request** | [**\OpenAPI\Client\Model\NFSePostRequest**](../Model/NFSePostRequest.md)| Estrutura contendo um DPS compactado no padrão gZip (base64Binary) | |

### Return type

[**\OpenAPI\Client\Model\NFSePostResponseSucesso**](../Model/NFSePostResponseSucesso.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
