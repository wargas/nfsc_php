<?php
header("content-type: application/json");
require 'vendor/autoload.php';
require 'database.php';

/*
    obtem a competencia passava via get. 
    Se não for passada nenuma, será considerada a competencia atual
*/
$competencia = isset($_GET["competencia"]) ? $_GET["competencia"] : date("ym");

/* buscas as notas fiscais no banco */
$notas = $DB::table("notasfiscais")->where("competencia", $competencia)->get();

/* inicia a configuração da class */
$data = new stdClass();

/* preenche a classe com os valores */
$data->cnpj = "1234567891232";
$data->competencia = $competencia;
$data->emissao = "20210327";
$data->numero = "100";
$data->uf = "PE";
$data->items = $notas->toArray();

/* Gerar o mestre */
$mestre = new Nfsc\Mestre($data);
$mestre->generateFile();

/* Gerar o cadastro */
$cadastro = new Nfsc\Cadastro($data);
$cadastro->generateFile();

/* Gerar o cadastro */
$items = new Nfsc\Item($data);
$items->generateFile();

//** atualizar a tabela de acordo com o arquivo de mestre  **/
foreach($mestre->info() as $info) {
    $DB::table("notasfiscais")
        ->where("nf_numero",  intval($info["nf_numero"]))
        ->update(['nf_hash' => $info['nf_hash']]);
}