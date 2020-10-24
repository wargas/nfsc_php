<?php 

namespace Nfsc;

class Nfsc {

    public function __construct($data) {
        $cadastro = new Cadastro($data);
        $mestre = new Mestre($data);
        $item = new Item($data);
        
        
       $cadastro->generateFile();
       $mestre->generateFile();
       $item->generateFile();
    }

}