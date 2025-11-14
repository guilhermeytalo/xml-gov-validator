# Validação de XML NFSe Nacional

Este projeto demonstra como validar um arquivo XML de Declaração de Prestação de Serviços (DPS) contra os schemas XSD do padrão nacional da Nota Fiscal de Serviço Eletrônica (NFSe).

## Arquivos

- `meu_teste_nacional.xml`: Um exemplo de arquivo XML de DPS.
- `validar_xml.php`: Um script PHP para realizar a validação do XML contra o schema XSD.
- `schemas/`: Um diretório contendo os arquivos XSD necessários para a validação.

## Como Validar

Para validar o arquivo `meu_teste_nacional.xml`, execute o seguinte comando no terminal:

```bash
php validar_xml.php
```

O script irá carregar o XML e tentar validá-lo contra o `schemas/DPS_v1.00.xsd`. Ele exibirá uma mensagem de sucesso ou listará os erros encontrados.

## Origem dos Schemas XSD

Os schemas XSD utilizados neste projeto foram obtidos do portal oficial da [Nota Fiscal de Serviço Eletrônica (NFSe) Nacional](https://www.gov.br/nfse/pt-br/biblioteca/documentacao-tecnica/leiaute-e-esquemas-antigos/xsd_pl_nfse_1-00-producao.zip/view).

## Artefatos Gerados para a API REST

Para facilitar a implementação de clientes para a API REST da NFSe, os seguintes artefatos foram gerados.

### Especificação OpenAPI

- `nfse_contribuintes_api_v1.json`: O arquivo de especificação OpenAPI 3.0 para a API de Contribuintes. Este arquivo foi usado para gerar o cliente PHP e a coleção do Postman.

### Cliente PHP (SDK)

- `client_php/`: Um diretório contendo um cliente PHP completo para a API. Ele fornece classes e métodos para todas as operações da API, facilitando a integração.
- **Como usar:** Consulte o arquivo `client_php/README.md` para instruções detalhadas sobre como instalar e utilizar o cliente com o Composer.

### Coleção Postman

- `nfse_postman_collection.json`: Uma coleção para o Postman que pode ser importada para testar e interagir facilmente com os endpoints da API.

**Nota Importante:** A especificação OpenAPI original continha erros de validação. Os artefatos foram gerados forçadamente e, embora funcionais, podem precisar de ajustes manuais.
