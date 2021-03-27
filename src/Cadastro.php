<?php 

namespace Nfsc;


class Cadastro extends Nfsc {

    public function __construct($data)
    {
        $this->campos = require('data/cadastro.php');
        $this->data = $data;
        $this->tipo = "D";

        $this->fillDefaultLines();

        foreach($this->data->items as $line=>$item) {
            $this->setCampo($line, 0, $item->documento);
            $this->setCampo($line, 2, $item->nome);
            $this->setCampo($line, 3, $item->logradouro);
            $this->setCampo($line, 4, $item->numero);
            $this->setCampo($line, 6, preg_replace("/\D/", "", $item->cep));
            $this->setCampo($line, 7, $item->bairro);
            $this->setCampo($line, 8, $item->cidade);
            $this->setCampo($line, 9, $item->uf);
            $this->setCampo($line, 10, $item->telefone);
            $this->setCampo($line, 11, $item->cliente_id);
            $this->setCampo($line, 12, $item->telefone);
            $this->setCampo($line, 13, $item->uf);
            $this->setCampo($line, 14, $this->data->emissao);
            $this->setCampo($line, 17, $item->nf_numero);
            $this->setCampo($line, 18, $item->ibge);

            $str = implode('', $this->lines[$line]);

            $str = substr($str, 0, strlen($str) - 32);

            $this->setCampo($line, 20, md5($str));

        }
    }

 

}