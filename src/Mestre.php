<?php

namespace Nfsc;


class Mestre extends Nfsc
{

    public function __construct($data)
    {
        $this->campos = require('data/mestre.php');
        $this->data = $data;
        $this->tipo = "M";

        $this->fillDefaultLines();

        foreach ($this->data->items as $line => $item) {
            $this->setCampo($line, 0, $item->documento);
            $this->setCampo($line, 2, $item->nome);
            $this->setCampo($line, 3, $item->uf);
            $this->setCampo($line, 7, $item->cliente_id);
            $this->setCampo($line, 8, $this->data->emissao);
            $this->setCampo($line, 11, $this->data->numero + $line);
            $this->setCampo($line, 13, number_format($item->valor, 2));
            $this->setCampo($line, 14, number_format($item->valor, 2));
            $this->setCampo($line, 19, $this->data->competencia);
            $this->setCampo($line, 20, $line + 1);
            $this->setCampo($line, 21, $item->telefone);
            $this->setCampo($line, 22, strlen($item->documento) > 11 ? 1 : 2);
            $this->setCampo($line, 23, strlen($item->documento) > 11 ? 1 : 3);
            $this->setCampo($line, 25, $item->telefone);
            $this->setCampo($line, 26, $this->data->cnpj);
            $this->setCampo($line, 27, $item->fatura_id);
            $this->setCampo($line, 28, number_format($item->valor, 2));

            $this->setCampo($line, 12, md5(implode('', [
                $this->lines[$line][0],
                $this->lines[$line][11],
                $this->lines[$line][13],
                $this->lines[$line][14],
                $this->lines[$line][15],
                $this->lines[$line][8],
                $this->lines[$line][26],
            ])));

            $str = implode('', $this->lines[$line]);

            $str = substr($str, 0, strlen($str) - 32);

            $this->setCampo($line, 35, md5($str));
        }
    }

    
}
