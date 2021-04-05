<?php

header("content-type: application/json");
require 'vendor/autoload.php';
require 'database.php';

try {

/*
    obtem a competencia passava via get. 
    Se não for passada nenuma, será considerada a competencia atual
*/
$competencia = isset($_GET["competencia"]) ? $_GET["competencia"] : date("ym");
$emissao = isset($_GET["emissao"]) ? $_GET["emissao"] : date("Ymd");

/* buscas as notas fiscais no banco */
$notas = $DB::table("notasfiscais")->where("competencia", $competencia)->get();

/* inicia a configuração da class */
$data = new stdClass();

/* preenche a classe com os valores */
$data->cnpj = "18180990000152";
$data->ie = "053027302";
$data->razaosocial = "BITMAX INFORMATICA E TELECOMUNICACOES LTDA - ME";
$data->municipio = "Araripina";
$data->uf = "PE";
$data->telefone = "telefone";
$data->logradouro = "AVENIDA ANTONIO DE BARROS MUNIZ";
$data->numero = "58";
$data->complemento = "LOJA 07";
$data->bairro = "CENTRO";
$data->cep = "56.280-000";
$data->responsavel = "Leonardo Pereira de Souza";
$data->competencia = $competencia;
$data->emissao = $emissao;
$data->items = $notas->toArray();

/* Gerar o mestre */
$mestre = new Nfsc\Mestre($data);
$mestre->generateFile();

/* Gerar o cadastro */
$cadastro = new Nfsc\Cadastro($data);
$cadastro->generateFile();

/* Gerar o item */
$items = new Nfsc\Item($data);
$items->generateFile();


$sintegra = new Nfsc\Sintegra\Sintegra($data);
$sintegra->generateFile();

$zip = new ZipArchive();

$zip->open("geradas/{$data->competencia}/{$data->competencia}.zip", ZipArchive::CREATE);

$zip->addFile($mestre->getFileName());
$zip->addFile($cadastro->getFileName());
$zip->addFile($items->getFileName());

$zip->close();

//** atualizar a tabela de acordo com o arquivo de mestre  **/
foreach ($mestre->info() as $info) {
    $DB::table("notasfiscais")
        ->where("nf_numero",  intval($info["nf_numero"]))
        ->update(['nf_hash' => $info['nf_hash']]);
}

echo json_encode(["competencia" => $competencia, "msg" => "arquivos gerados com sucesso"]);

} catch (Exception $e) {
    echo json_encode(["error"=> $e->getMessage()]);
}
