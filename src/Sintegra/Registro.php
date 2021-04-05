<?php

namespace Nfsc\Sintegra;

class Registro
{

    var $campos = [];

    public function __construct($campos)
    {
        $this->campos = $campos;
    }

    public function getCampo($index) {
        $filtred = array_filter($this->campos, function($item) use($index) {
            return $item['campo'] === $index;
        });

        if(count($filtred) > 0) {
            return $filtred[0]['valor'];
        }

        return "";
    }

    public function setCampo($index, $valor) {

        $this->campos = array_map(function($item) use($index, $valor) {
            if($index == $item['campo']) {
                if($item["tipo"] == "X") {
                    $item["valor"] = $this->parseString($valor, $item["tamanho"]);
                } else {
                    $item["valor"] = $this->parseNumber($valor, $item["tamanho"]);
                }
            }
            
            return $item;
        }, $this->campos);
    }

    private function parseString($valor, $tamanho)
    {
        return str_pad(
            substr($valor, 0, $tamanho),
            $tamanho,
            " ",
            STR_PAD_RIGHT
        );
    }

    private function parseNumber($valor, $tamanho)
    {
        return str_pad(
            substr(preg_replace("/\D/", "", $valor), 0, $tamanho),
            $tamanho,
            "0",
            STR_PAD_LEFT
        );
    }

    public function getLine() {
        $items = array_map(function($item){
            return $item['valor'];
        }, $this->campos);

        return implode("", $items);
    }
}
