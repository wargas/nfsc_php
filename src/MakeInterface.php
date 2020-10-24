<?php 


namespace Nfsc;

class MakeInterface {

    var $data = null;
    var $campos = [];
    var $lines = [];
    var $tipo = '';

        
    public function setCampo($line, $pos, $value) {
        if($this->campos[$pos]['tipo'] === 'X') {
            $this->lines[$line][$pos] = Helper::text($value, $this->campos[$pos]['tamanho']);
        }
        if($this->campos[$pos]['tipo'] === 'N') {
            $this->lines[$line][$pos] = Helper::number($value, $this->campos[$pos]['tamanho']);
        }
    }

    public function fillDefaultLines() {
        foreach($this->data->items as $item) {
            $this->lines[] = array_map(function($arr) {
                if($arr['tipo'] === 'X') {
                    return Helper::text($arr['default'], $arr['tamanho']);
                }

                if($arr['tipo'] === 'N') {
                    return Helper::number($arr['default'], $arr['tamanho']);
                }
            }, $this->campos);
        }
    }

    public function getTexto() {
        $quebra = "\r\n";
        return implode($quebra, array_map(function($item) {
            return implode('', $item);
        }, $this->lines)).$quebra;
    }

    public function getFileName() {
        return "geradas/{$this->data->competencia}/{$this->data->uf}{$this->data->cnpj}21U  {$this->data->competencia}N01{$this->tipo}.001";
    }

    public function generateFile() {
        if(!file_exists("geradas/{$this->data->competencia}")) {
            mkdir("geradas/{$this->data->competencia}");
        }
        file_put_contents($this->getFileName(), $this->getTexto());
    }

    public function info() {
        $infos = [];
        foreach($this->data->items as $index => $item) {
            foreach($this->campos as $pos=>$campo) {
                if(isset($campo['info'])) {
                    $infos[$index][$campo['info']] = $this->lines[$index][$pos];
                }
            }
        }

        return $infos;
    }
    
}