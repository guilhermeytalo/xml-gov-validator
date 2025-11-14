<?php
// Configurações
$arquivoXml = 'meu_teste_nacional.xml'; // O XML que você gerou no passo anterior
$arquivoXsd = 'schemas/DPS_v1.00.xsd';  // Caminho para o XSD principal (verifique o nome exato na pasta)

// Verifica se os arquivos existem
if (!file_exists($arquivoXml)) die("Erro: Arquivo XML não encontrado: $arquivoXml\n");
if (!file_exists($arquivoXsd)) die("Erro: Arquivo XSD não encontrado: $arquivoXsd\n");

// Habilita captura de erros do libxml
libxml_use_internal_errors(true);

$dom = new DOMDocument();
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;

echo "--------------------------------------------------\n";
echo "Iniciando validação...\n";
echo "XML: $arquivoXml\n";
echo "XSD: $arquivoXsd\n";
echo "--------------------------------------------------\n\n";

// Tenta carregar o XML
if (!$dom->load($arquivoXml)) {
    echo "❌ ERRO CRÍTICO: O XML não é válido (erro de sintaxe).\n";
    foreach (libxml_get_errors() as $error) {
        echo "   - " . $error->message . "\n";
    }
    exit(1);
}

// Tenta validar contra o Schema XSD
if ($dom->schemaValidate($arquivoXsd)) {
    echo "✅ SUCESSO! O XML é válido segundo o Schema Nacional.\n";
    echo "   Isso significa que a estrutura, campos obrigatórios e tipos de dados estão corretos.\n";
} else {
    echo "🚫 FALHA NA VALIDAÇÃO XSD:\n";
    $errors = libxml_get_errors();
    foreach ($errors as $error) {
        echo "   [Linha " . $error->line . "] " . trim($error->message) . "\n";
    }
}

// Limpa erros da memória
libxml_clear_errors();
echo "\n--------------------------------------------------\n";
?>