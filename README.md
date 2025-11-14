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

Os schemas XSD utilizados neste projeto foram obtidos do portal oficial da Nota Fiscal de Serviço Eletrônica (NFSe) Nacional, disponível em:

[https://www.gov.br/nfse/pt-br/biblioteca/documentacao-tecnica/leiaute-e-esquemas-antigos/xsd_pl_nfse_1-00-producao.zip/view](https://www.gov.br/nfse/pt-br/biblioteca/documentacao-tecnica/leiaute-e-esquemas-antigos/xsd_pl_nfse_1-00-producao.zip/view)
