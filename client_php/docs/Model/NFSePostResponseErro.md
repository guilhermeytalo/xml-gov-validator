# # NFSePostResponseErro

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tipo_ambiente** | **int** | Tipo de ambiente (1-Produção | 2-Homologação) |
**versao_aplicativo** | **string** | Versão do aplicativo que processou a requisição |
**data_hora_processamento** | **\DateTime** | Data e hora de processamento da requisição |
**id_dps** | **string** | Id do DPS (se tiver conseguido capturar do Xml) | [optional] [readonly]
**erros** | [**\OpenAPI\Client\Model\MensagemProcessamento[]**](MensagemProcessamento.md) | Erro de processamento do DPS | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
