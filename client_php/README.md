# Cliente PHP para API NFSe Nacional

Este é um cliente de API PHP gerado automaticamente para a [API de Contribuintes da NFSe Nacional](https://www.gov.br/nfse/pt-br/biblioteca/documentacao-tecnica/documentacao-atual).

<p><strong>Protocolo de comunicação:</strong> TLS 1.0, TLS 1.1 e TLS 1.2 com autenticação mútua</p>  <p><strong>Formato para troca de mensagens:</strong> JSON</p>  <p><strong>Formato dos documentos da NFS-e:</strong> XML 1.0  <a href ="https://www.w3.org/TR/REC-xml"> (https://www.w3.org/TR/REC-xml)</a> </p>   <p><strong>Codificação de caracteres:</strong> UTF-8</p> <p><strong>Certificado digital:</strong> Emitido por Autoridade Certificadora ICP-Brasil, tipo A1 ou A3, CNPJ ou CPF, com "Autenticação do Cliente"</p> <p><strong>Padrão de assinatura dos documentos XML:</strong> XMLDSIG <a href="https://www.w3.org/TR/xmldsig-core">  (https://www.w3.org/TR/xmldsig-core/) </a>  </p>    <p><strong>Padrão de compactação dos documentos XML para troca de mensagens:</strong> GZip com representação base64binary</p><br/>

**Aviso Importante:** Este cliente foi gerado a partir de uma especificação OpenAPI que não passou nas validações de conformidade. A geração foi forçada com a opção `--skip-validate-spec`. Embora o código seja um bom ponto de partida, ele pode conter bugs ou comportamentos inesperados devido a inconsistências na especificação original.

## Requisitos

PHP 8.1 ou superior e [Composer](https://getcomposer.org/) para gerenciar as dependências.

## Instalação e Uso

A maneira recomendada de usar este cliente é integrá-lo ao seu projeto existente usando o Composer.

### Usando como um repositório local (Path)

1.  Coloque esta pasta (`client_php`) dentro do seu projeto ou em um local acessível.

2.  No arquivo `composer.json` do **seu projeto principal**, adicione um repositório do tipo `path` e inclua o cliente no `require`:

    ```json
    {
      "repositories": [
        {
          "type": "path",
          "url": "path/to/client_php"
        }
      ],
      "require": {
        "open-api-client/open-api-client": "@dev"
      }
    }
    ```
    > Substitua `"path/to/client_php"` pelo caminho real para esta pasta.

3.  Execute `composer update` no seu projeto para que o Composer encontre e instale o cliente.

4.  Agora você pode usar as classes da API em seu projeto. O `autoload.php` do Composer cuidará do carregamento dos arquivos.

### Exemplo de Uso

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php'); // Autoloader do seu projeto principal

// Crie uma instância da API
$apiInstance = new OpenAPI\Client\Api\DANFSeHttpsSefinNfseGovBrSefinnacionalApi(
    // É opcional passar um cliente Guzzle. Se não for passado, um novo será criado.
    new GuzzleHttp\Client()
);
$chave_acesso = '50...'; // string | Chave de acesso da NFS-e

try {
    $result = $apiInstance->dANFSeGet($chave_acesso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DANFSeApi->dANFSeGet: ', $e->getMessage(), PHP_EOL;
}
```

## Documentação das Endpoints

Todos os URIs são relativos a *https://sefin.nfse.gov.br/sefinnacional*

Classe | Método | Requisição HTTP | Descrição
------------ | ------------- | ------------- | -------------
*DANFSeHttpsSefinNfseGovBrSefinnacionalApi* | [**dANFSeGet**](docs/Api/DANFSeHttpsSefinNfseGovBrSefinnacionalApi.md#danfseget) | **GET** /danfse/{chaveAcesso} | Retorna o DANFSe de uma NFS-e a partir de sua chave de acesso.
*DFeHttpsAdnNfseGovBrContribuinteApi* | [**dFeNSUGet**](docs/Api/DFeHttpsAdnNfseGovBrContribuinteApi.md#dfensuget) | **GET** /DFe/{NSU} | Distribui os DF-e para contribuintes relacionados à NFS-e.
*DFeHttpsAdnNfseGovBrContribuinteApi* | [**nFSeChaveAcessoEventosGet**](docs/Api/DFeHttpsAdnNfseGovBrContribuinteApi.md#nfsechaveacessoeventosget) | **GET** /NFSe/{ChaveAcesso}/Eventos | Distribui os DF-e vinculados à chave de acesso informada
*DPSHttpsSefinNfseGovBrSefinnacionalApi* | [**dpsGet**](docs/Api/DPSHttpsSefinNfseGovBrSefinnacionalApi.md#dpsget) | **GET** /dps/{id} | Retorna a chave de acesso da NFS-e a partir do identificador do DPS.
*DPSHttpsSefinNfseGovBrSefinnacionalApi* | [**dpsHead**](docs/Api/DPSHttpsSefinNfseGovBrSefinnacionalApi.md#dpshead) | **HEAD** /dps/{id} | Verifica se uma NFS-e foi emitida a partir do Id do DPS
*EventosHttpsSefinNfseGovBrSefinnacionalApi* | [**eventosGet**](docs/Api/EventosHttpsSefinNfseGovBrSefinnacionalApi.md#eventosget) | **GET** /nfse/{chaveAcesso}/eventos/{tipoEvento}/{numSeqEvento} | Retorna NFS-e e seus eventos relacionados a partir da consulta pela chave de acesso da NFS-e.
*EventosHttpsSefinNfseGovBrSefinnacionalApi* | [**eventosPost**](docs/Api/EventosHttpsSefinNfseGovBrSefinnacionalApi.md#eventospost) | **POST** /nfse/{chaveAcesso}/eventos | Recepciona o Pedido de Registro de Evento e gera Eventos de NFS-e, crédito, débito e apuração.
*EventosHttpsSefinNfseGovBrSefinnacionalApi* | [**nfseChaveAcessoEventosGet**](docs/Api/EventosHttpsSefinNfseGovBrSefinnacionalApi.md#nfsechaveacessoeventosget) | **GET** /nfse/{ChaveAcesso}/eventos | Retorna os Documentos Fiscais de Serviço do tipo Evento vinculados à chave de acesso informada
*NFSEHttpsSefinNfseGovBrSefinnacionalApi* | [**nFSeGet**](docs/Api/NFSEHttpsSefinNfseGovBrSefinnacionalApi.md#nfseget) | **GET** /nfse/{chaveAcesso} | Retorna a NFS-e a partir da consulta pela chave de acesso correspondente (50 posições).
*NFSEHttpsSefinNfseGovBrSefinnacionalApi* | [**nFSePost**](docs/Api/NFSEHttpsSefinNfseGovBrSefinnacionalApi.md#nfsepost) | **POST** /nfse | Recepciona a DPS e Gera a NFS-e de forma síncrona.
*ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi* | [**aliquotasGet**](docs/Api/ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi.md#aliquotasget) | **GET** /parametros_municipais/{codigoMunicipio}/{codigoServico}/{competencia}/aliquota | Retorna a alíquota do ISSQN parametrizada de um município a partir desta consulta.
*ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi* | [**aliquotasGet_0**](docs/Api/ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi.md#aliquotasget_0) | **GET** /parametros_municipais/{codigoMunicipio}/{codigoServico}/historicoaliquotas | Retorna histórico de alíquotas do ISSQN parametrizadas de um município a partir de um código de município e código de serviço.
*ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi* | [**beneficioGet**](docs/Api/ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi.md#beneficioget) | **GET** /parametros_municipais/{codigoMunicipio}/{numeroBeneficio}/{competencia}/beneficio | Retorna os parâmetros de um número de benefício municipal a partir desta consulta.
*ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi* | [**convenioGet**](docs/Api/ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi.md#convenioget) | **GET** /parametros_municipais/{codigoMunicipio}/convenio | Retorna os parâmetros do convênio de um município a partir desta consulta.
*ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi* | [**regimesEspeciaisGet**](docs/Api/ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi.md#regimesespeciaisget) | **GET** /parametros_municipais/{codigoMunicipio}/{codigoServico}/{competencia}/regimes_especiais | Retorna os parâmetros de regimes especiais de tributação de um município a partir desta consulta.
*ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi* | [**retencoesGet**](docs/Api/ParmetrosMunicipaisHttpsSefinNfseGovBrSefinnacionalApi.md#retencoesget) | **GET** /parametros_municipais/{codigoMunicipio}/{competencia}/retencoes | Retorna os parâmetros para retenções do ISSQN de um município a partir desta consulta.

## Models

A documentação para os Models (Modelos de Dados) está disponível na pasta `docs/Model`.

## Testes

Para executar os testes, use:

```bash
composer install
vendor/bin/phpunit
```