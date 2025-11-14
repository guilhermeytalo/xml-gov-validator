# OpenAPI\Client\ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi



All URIs are relative to https://sefin.nfse.gov.br/sefinnacional, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aliquotasGet()**](ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi.md#aliquotasGet) | **GET** /parametros_municipais/{codigoMunicipio}/{codigoServico}/{competencia}/aliquota | Retorna a alíquota do ISSQN parametrizada de um município a partir desta consulta. |
| [**aliquotasGet_0()**](ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi.md#aliquotasGet_0) | **GET** /parametros_municipais/{codigoMunicipio}/{codigoServico}/historicoaliquotas | Retorna histórico de alíquotas do ISSQN parametrizadas de um município a partir de um código de município e código de serviço. |
| [**beneficioGet()**](ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi.md#beneficioGet) | **GET** /parametros_municipais/{codigoMunicipio}/{numeroBeneficio}/{competencia}/beneficio | Retorna os parâmetros de um número de benefício municipal a partir desta consulta. |
| [**convenioGet()**](ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi.md#convenioGet) | **GET** /parametros_municipais/{codigoMunicipio}/convenio | Retorna os parâmetros do convênio de um município a partir desta consulta. |
| [**regimesEspeciaisGet()**](ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi.md#regimesEspeciaisGet) | **GET** /parametros_municipais/{codigoMunicipio}/{codigoServico}/{competencia}/regimes_especiais | Retorna os parâmetros de regimes especiais de tributação de um município a partir desta consulta. |
| [**retencoesGet()**](ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi.md#retencoesGet) | **GET** /parametros_municipais/{codigoMunicipio}/{competencia}/retencoes | Retorna os parâmetros para retenções do ISSQN de um município a partir desta consulta. |


## `aliquotasGet()`

```php
aliquotasGet($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2, $UNKNOWN_PARAMETER_NAME3): \OpenAPI\Client\Model\ResultadoConsultaAliquotas
```

Retorna a alíquota do ISSQN parametrizada de um município a partir desta consulta.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$UNKNOWN_PARAMETER_NAME = new \OpenAPI\Client\Model\null(); //  | O código do município deve ser composto por sete dígitos.
$UNKNOWN_PARAMETER_NAME2 = new \OpenAPI\Client\Model\null(); //  | O código do serviço deve ser informado no formato 00.00.00.000.
$UNKNOWN_PARAMETER_NAME3 = new \OpenAPI\Client\Model\null(); //  | No formato MM/DD/YYYY

try {
    $result = $apiInstance->aliquotasGet($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2, $UNKNOWN_PARAMETER_NAME3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi->aliquotasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **UNKNOWN_PARAMETER_NAME** | [****](../Model/.md)| O código do município deve ser composto por sete dígitos. | |
| **UNKNOWN_PARAMETER_NAME2** | [****](../Model/.md)| O código do serviço deve ser informado no formato 00.00.00.000. | |
| **UNKNOWN_PARAMETER_NAME3** | [****](../Model/.md)| No formato MM/DD/YYYY | |

### Return type

[**\OpenAPI\Client\Model\ResultadoConsultaAliquotas**](../Model/ResultadoConsultaAliquotas.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aliquotasGet_0()`

```php
aliquotasGet_0($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2)
```

Retorna histórico de alíquotas do ISSQN parametrizadas de um município a partir de um código de município e código de serviço.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$UNKNOWN_PARAMETER_NAME = new \OpenAPI\Client\Model\null(); //  | O código do município deve ser composto por sete dígitos.
$UNKNOWN_PARAMETER_NAME2 = new \OpenAPI\Client\Model\null(); //  | O código do serviço deve ser informado no formato 00.00.00.000.

try {
    $apiInstance->aliquotasGet_0($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2);
} catch (Exception $e) {
    echo 'Exception when calling ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi->aliquotasGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **UNKNOWN_PARAMETER_NAME** | [****](../Model/.md)| O código do município deve ser composto por sete dígitos. | |
| **UNKNOWN_PARAMETER_NAME2** | [****](../Model/.md)| O código do serviço deve ser informado no formato 00.00.00.000. | |

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

## `beneficioGet()`

```php
beneficioGet($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2, $UNKNOWN_PARAMETER_NAME3): \OpenAPI\Client\Model\ResultadoConsultaBeneficio
```

Retorna os parâmetros de um número de benefício municipal a partir desta consulta.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$UNKNOWN_PARAMETER_NAME = new \OpenAPI\Client\Model\null(); //  | O código do município deve ser composto por sete dígitos.
$UNKNOWN_PARAMETER_NAME2 = new \OpenAPI\Client\Model\null(); //  | O número do município deve ser composto por onze dígitos.
$UNKNOWN_PARAMETER_NAME3 = new \OpenAPI\Client\Model\null(); //  | No formato MM/DD/YYYY

try {
    $result = $apiInstance->beneficioGet($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2, $UNKNOWN_PARAMETER_NAME3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi->beneficioGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **UNKNOWN_PARAMETER_NAME** | [****](../Model/.md)| O código do município deve ser composto por sete dígitos. | |
| **UNKNOWN_PARAMETER_NAME2** | [****](../Model/.md)| O número do município deve ser composto por onze dígitos. | |
| **UNKNOWN_PARAMETER_NAME3** | [****](../Model/.md)| No formato MM/DD/YYYY | |

### Return type

[**\OpenAPI\Client\Model\ResultadoConsultaBeneficio**](../Model/ResultadoConsultaBeneficio.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `convenioGet()`

```php
convenioGet($codigo_municipio): \OpenAPI\Client\Model\ResultadoConsultaConfiguracoesConvenio
```

Retorna os parâmetros do convênio de um município a partir desta consulta.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$codigo_municipio = 56; // int | O código do município deve ser composto por sete dígitos.

try {
    $result = $apiInstance->convenioGet($codigo_municipio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi->convenioGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codigo_municipio** | **int**| O código do município deve ser composto por sete dígitos. | |

### Return type

[**\OpenAPI\Client\Model\ResultadoConsultaConfiguracoesConvenio**](../Model/ResultadoConsultaConfiguracoesConvenio.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `regimesEspeciaisGet()`

```php
regimesEspeciaisGet($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2, $UNKNOWN_PARAMETER_NAME3): \OpenAPI\Client\Model\ResultadoConsultaRegimesEspeciais
```

Retorna os parâmetros de regimes especiais de tributação de um município a partir desta consulta.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$UNKNOWN_PARAMETER_NAME = new \OpenAPI\Client\Model\null(); //  | O código do município deve ser composto por sete dígitos.
$UNKNOWN_PARAMETER_NAME2 = new \OpenAPI\Client\Model\null(); //  | O código do serviço deve ser informado no formato 00.00.00.000.
$UNKNOWN_PARAMETER_NAME3 = new \OpenAPI\Client\Model\null(); //  | No formato MM/DD/YYYY

try {
    $result = $apiInstance->regimesEspeciaisGet($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2, $UNKNOWN_PARAMETER_NAME3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi->regimesEspeciaisGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **UNKNOWN_PARAMETER_NAME** | [****](../Model/.md)| O código do município deve ser composto por sete dígitos. | |
| **UNKNOWN_PARAMETER_NAME2** | [****](../Model/.md)| O código do serviço deve ser informado no formato 00.00.00.000. | |
| **UNKNOWN_PARAMETER_NAME3** | [****](../Model/.md)| No formato MM/DD/YYYY | |

### Return type

[**\OpenAPI\Client\Model\ResultadoConsultaRegimesEspeciais**](../Model/ResultadoConsultaRegimesEspeciais.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retencoesGet()`

```php
retencoesGet($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2): \OpenAPI\Client\Model\ResultadoConsultaRetencoes
```

Retorna os parâmetros para retenções do ISSQN de um município a partir desta consulta.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$UNKNOWN_PARAMETER_NAME = new \OpenAPI\Client\Model\null(); //  | O código do município deve ser composto por sete dígitos.
$UNKNOWN_PARAMETER_NAME2 = new \OpenAPI\Client\Model\null(); //  | No formato MM/DD/YYYY

try {
    $result = $apiInstance->retencoesGet($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi->retencoesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **UNKNOWN_PARAMETER_NAME** | [****](../Model/.md)| O código do município deve ser composto por sete dígitos. | |
| **UNKNOWN_PARAMETER_NAME2** | [****](../Model/.md)| No formato MM/DD/YYYY | |

### Return type

[**\OpenAPI\Client\Model\ResultadoConsultaRetencoes**](../Model/ResultadoConsultaRetencoes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
