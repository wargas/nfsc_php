<?php

namespace Nfsc\Sintegra;

use Exception;

class Sintegra
{

    var $registros = [];
    var $campos = [];
    var $data;

    public function __construct($data)
    {
        $this->campos = require(__DIR__ . "/../data/sintegra.php");
        $this->data = $data;

        $this->registro10();
        $this->registro11();
        $this->registro75();
        $this->registro76();
        $this->registro77();
        $this->registro90();
    }

    public function registro10()
    {

        $inicio = \Carbon\Carbon::createFromFormat("ymd", $this->data->competencia . '01');


        $registro = new Registro($this->campos[0]['campos']);
        $registro->setCampo("02", $this->data->cnpj);
        $registro->setCampo("03", $this->data->ie);
        $registro->setCampo("04", $this->data->razaosocial);
        $registro->setCampo("05", $this->data->municipio);
        $registro->setCampo("06", $this->data->uf);
        $registro->setCampo("07", $this->data->telefone);
        $registro->setCampo("08", $inicio->format('Ymd'));
        $registro->setCampo("09", $inicio->addMonth(1)->subDays(1)->format('Ymd'));
        $registro->setCampo("10", "3");
        $registro->setCampo("11", "3");
        $registro->setCampo("12", "1");

        $this->registros[] = $registro;
    }

    public function countRegistrosTipo($tipo)
    {
        $count = 0;

        foreach ($this->registros as $registro) {
            if ($registro->getCampo('01') == $tipo) {
                $count = $count + 1;
            }
        }

        return $count;
    }

    public function registro11()
    {
        $registro = new Registro($this->campos[1]['campos']);
        $registro->setCampo("02", $this->data->logradouro);
        $registro->setCampo("03", $this->data->numero);
        $registro->setCampo("04", $this->data->complemento);
        $registro->setCampo("05", $this->data->bairro);
        $registro->setCampo("06", $this->data->cep);
        $registro->setCampo("07", $this->data->responsavel);
        $registro->setCampo("08", $this->data->telefone);


        $this->registros[] = $registro;
    }

    public function registro75()
    {

        $inicio = \Carbon\Carbon::createFromFormat("ymd", $this->data->competencia . '01');

        $registro = new Registro($this->campos[2]['campos']);
        $registro->setCampo("02", $inicio->format('Ymd'));
        $registro->setCampo("03", $inicio->addMonth(1)->subDays(1)->format('Ymd'));
        $registro->setCampo("04", " ");
        $registro->setCampo("05", " ");
        $registro->setCampo("06", "SERVICO DE INTERNET");
        $registro->setCampo("07", "mbps");
        $registro->setCampo("08", "0");
        $registro->setCampo("09", "0");
        $registro->setCampo("10", "0");
        $registro->setCampo("11", "0");


        $this->registros[] = $registro;
    }



    public function registro76()
    {
        foreach ($this->data->items as $item) {
            $registro = new Registro($this->campos[3]['campos']);
            $registro->setCampo("02", $item->documento);
            $registro->setCampo("03", "55");
            $registro->setCampo("04", "1 ");
            $registro->setCampo("05", "1 ");
            $registro->setCampo("06", $item->nf_numero);
            $registro->setCampo("07", $item->cfop);
            $registro->setCampo("08", "1");
            $registro->setCampo("09", "1");
            $registro->setCampo("10", $item->emissao);
            $registro->setCampo("11", $item->uf);
            $registro->setCampo("12", $item->valor);
            $registro->setCampo("13", "0");
            $registro->setCampo("14", "0");
            $registro->setCampo("15", "0");
            $registro->setCampo("16", "0");
            $registro->setCampo("17", "0");
            $registro->setCampo("18", "0");


            $this->registros[] = $registro;
        }
    }

    public function registro77()
    {
        foreach ($this->data->items as $item) {
            $registro = new Registro($this->campos[4]['campos']);
            $registro->setCampo("02", $item->documento);
            $registro->setCampo("03", "21");
            $registro->setCampo("04", "1");
            $registro->setCampo("05", "1");
            $registro->setCampo("06", $item->nf_numero);
            $registro->setCampo("07", $item->cfop);
            $registro->setCampo("08", "1");
            $registro->setCampo("09", "1");
            $registro->setCampo("10", "1");
            $registro->setCampo("11", "1");
            $registro->setCampo("12", $item->valor);
            $registro->setCampo("13", "");
            $registro->setCampo("14", "");
            $registro->setCampo("15", "");
            $registro->setCampo("16", "");
            $registro->setCampo("17", "");


            $this->registros[] = $registro;
        }
    }

    public function registro90()
    {

        $registro = new Registro($this->campos[5]['campos']);
        $registro->setCampo("02", $this->data->cnpj);
        $registro->setCampo("03", $this->data->ie);
        $registro->setCampo("04", "75");
        $registro->setCampo("05", $this->countRegistrosTipo('75'));
        $registro->setCampo("06", "76");
        $registro->setCampo("07", $this->countRegistrosTipo('76'));
        $registro->setCampo("08", "77");
        $registro->setCampo("09", $this->countRegistrosTipo('77'));
        $registro->setCampo("10", " ");

        $this->registros[] = $registro;
    }

    public function getLines()
    {
        $items = array_map(function ($item) {
            return $item->getLine();
        }, $this->registros);

        return implode("\r\n", $items);
    }

    public function getFileName() {
        return "geradas/{$this->data->competencia}/{$this->data->competencia}-sintegra.txt";
    }

    public function generateFile()
    {
        if (!file_exists("geradas/{$this->data->competencia}")) {
            if(!mkdir("geradas/{$this->data->competencia}")) {
                throw new Exception('Erro ao gerar pasta');
            }
        }
        if(!file_put_contents($this->getFileName(), $this->getLines())) {
            throw new Exception('Erro ao gerar o arquivo sintegra');
        }
    }
}
