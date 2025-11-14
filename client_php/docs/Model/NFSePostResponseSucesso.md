# # NFSePostResponseSucesso

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tipo_ambiente** | **int** | Tipo de ambiente (1-Produção | 2-Homologação) |
**versao_aplicativo** | **string** | Versão do aplicativo que processou a requisição |
**data_hora_processamento** | **\DateTime** | Data e hora de processamento da requisição |
**id_dps** | **string** | Identificador do DPS | [readonly]
**chave_acesso** | **string** | Chave de acesso da NFS-e | [readonly]
**nfse_xml_g_zip_b64** | **string** | NFS-e em formato Xml compactado no padrão gZip (base64Binary) | [readonly]
**alertas** | [**\OpenAPI\Client\Model\MensagemProcessamento[]**](MensagemProcessamento.md) | Alertas da NFS-e gerada | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
