# OpenAPI\Client\EventosHttpsSefinNfseGovBrSefinnacionalApi



All URIs are relative to https://sefin.nfse.gov.br/sefinnacional, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**eventosGet()**](EventosHttpsSefinNfseGovBrSefinnacionalApi.md#eventosGet) | **GET** /nfse/{chaveAcesso}/eventos/{tipoEvento}/{numSeqEvento} | Retorna NFS-e e seus eventos relacionados a partir da consulta pela chave de acesso da NFS-e. |
| [**eventosPost()**](EventosHttpsSefinNfseGovBrSefinnacionalApi.md#eventosPost) | **POST** /nfse/{chaveAcesso}/eventos | Recepciona o Pedido de Registro de Evento e gera Eventos de NFS-e, crédito, débito e apuração. |
| [**nfseChaveAcessoEventosGet()**](EventosHttpsSefinNfseGovBrSefinnacionalApi.md#nfseChaveAcessoEventosGet) | **GET** /nfse/{ChaveAcesso}/eventos | Retorna os Documentos Fiscais de Serviço do tipo Evento vinculados à chave de acesso informada |


## `eventosGet()`

```php
eventosGet($chave_acesso, $tipo_evento, $num_seq_evento): \OpenAPI\Client\Model\EventosPostResponseSucesso
```

Retorna NFS-e e seus eventos relacionados a partir da consulta pela chave de acesso da NFS-e.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EventosHttpsSefinNfseGovBrSefinnacionalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chave_acesso = 'chave_acesso_example'; // string | Chave de acesso
$tipo_evento = 56; // int | Tipo de evento
$num_seq_evento = 56; // int | Número sequencial do evento. Se informado, os demais parâmetros são obrigatórios

try {
    $result = $apiInstance->eventosGet($chave_acesso, $tipo_evento, $num_seq_evento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventosHttpsSefinNfseGovBrSefinnacionalApi->eventosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chave_acesso** | **string**| Chave de acesso | |
| **tipo_evento** | **int**| Tipo de evento | |
| **num_seq_evento** | **int**| Número sequencial do evento. Se informado, os demais parâmetros são obrigatórios | |

### Return type

[**\OpenAPI\Client\Model\EventosPostResponseSucesso**](../Model/EventosPostResponseSucesso.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventosPost()`

```php
eventosPost($chave_acesso, $eventos_post_request): \OpenAPI\Client\Model\EventosPostResponseSucesso
```

Recepciona o Pedido de Registro de Evento e gera Eventos de NFS-e, crédito, débito e apuração.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EventosHttpsSefinNfseGovBrSefinnacionalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chave_acesso = 'chave_acesso_example'; // string
$eventos_post_request = new \OpenAPI\Client\Model\EventosPostRequest(); // \OpenAPI\Client\Model\EventosPostRequest | Estrutura contendo o pedido de registro de evento compactado             no padrão GZip com representação base64binary

try {
    $result = $apiInstance->eventosPost($chave_acesso, $eventos_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventosHttpsSefinNfseGovBrSefinnacionalApi->eventosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chave_acesso** | **string**|  | |
| **eventos_post_request** | [**\OpenAPI\Client\Model\EventosPostRequest**](../Model/EventosPostRequest.md)| Estrutura contendo o pedido de registro de evento compactado             no padrão GZip com representação base64binary | |

### Return type

[**\OpenAPI\Client\Model\EventosPostResponseSucesso**](../Model/EventosPostResponseSucesso.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nfseChaveAcessoEventosGet()`

```php
nfseChaveAcessoEventosGet($chave_acesso): \OpenAPI\Client\Model\LoteDistribuicaoNSUResponse
```

Retorna os Documentos Fiscais de Serviço do tipo Evento vinculados à chave de acesso informada

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EventosHttpsSefinNfseGovBrSefinnacionalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chave_acesso = 'chave_acesso_example'; // string

try {
    $result = $apiInstance->nfseChaveAcessoEventosGet($chave_acesso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventosHttpsSefinNfseGovBrSefinnacionalApi->nfseChaveAcessoEventosGet: ', $e->getMessage(), PHP_EOL;
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
