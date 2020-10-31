<?php 

require 'vendor/autoload.php';

use \Slim\Http\Response;
use \Slim\Http\Request;

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

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

$app->get('/', function(Request $request, Response $response) use($app) {
    $nfs = [];

    foreach(glob('geradas/*') as $i=>$f) {
        $nfs[$i]['competencia'] = str_replace('geradas/', '', $f);
        $nfs[$i]['files'] = [
            array_map(function($arr) {
                return $_ENV['BASE_URL'] . '/'. $arr;
            }, glob('geradas/'.$nfs[$i]['competencia'].'/*'))
        ];
    }

    return $response->withJson($nfs);
});

$app->run();

if($app == null) {
    
}