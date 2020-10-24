<?php 

namespace Nfsc;


class Item extends MakeInterface {

    public function __construct($data)
    {
        $this->campos = require('data/item.php');
        $this->data = $data;
        $this->tipo = "I";

        $this->fillDefaultLines();

        foreach($this->data->items as $line=>$item) {
            $this->setCampo($line, 0, $item->documento);
            $this->setCampo($line, 1, $item->uf);
            $this->setCampo($line, 5, $this->data->emissao);
            $this->setCampo($line, 8, $this->data->numero + $line);
            $this->setCampo($line, 11, $item->fatura_id);
            $this->setCampo($line, 17, number_format($item->valor, 2));
            $this->setCampo($line, 20, number_format($item->valor, 2));
            $this->setCampo($line, 26, $this->data->competencia);
            $this->setCampo($line, 27, $item->cliente_id);
            $this->setCampo($line, 28, number_format($item->valor, 2));
            
            $str = implode('', $this->lines[$line]);

            $str = substr($str, 0, strlen($str) - 32);

            $this->setCampo($line, 37, md5($str));

        }
    }

}