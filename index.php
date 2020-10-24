<?php 

require 'vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new Slim\App;

$app->post('/', function(Request $request, Response $response) {

    $data = json_decode(file_get_contents('php://input'));

    
    $mestre = new Nfsc\Mestre($data);
    $cadastro = new Nfsc\Cadastro($data);
    $item = new Nfsc\Item($data);

    $mestre->generateFile();
    $cadastro->generateFile();
    $item->generateFile();

    $zip = new ZipArchive();

    $zip->open("geradas/{$data->competencia}/{$data->competencia}.zip", ZipArchive::CREATE);

    $zip->addFile($mestre->getFileName());
    $zip->addFile($cadastro->getFileName());
    $zip->addFile($item->getFileName());

    $zip->close();

    return $response->withJson([
        "arquivos" => [
            "mestre" => $mestre->getFileName(),
            "cadastro" => $cadastro->getFileName(),
            "item" => $item->getFileName(),
            "zip" => "geradas/{$data->competencia}/{$data->competencia}.zip"
        ],
        "infos" => [
            "mestre" => $mestre->info(),
            "cadastro" => $cadastro->info(),
            "item" => $item->info(),            
        ]  
    ]);
});

$app->run();