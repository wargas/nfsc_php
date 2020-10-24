<?php 

namespace Nfsc;

class Helper {

    public static function number($str, $tamanho) {
        $str = preg_replace("/\D/", "", $str);
        $str = substr($str, 0, $tamanho);
        return str_pad($str, $tamanho, "0", STR_PAD_LEFT);
    }

    public static function text($str, $tamanho) {
        $str = utf8_decode($str);
        $str = substr($str, 0, $tamanho);
        return str_pad($str, $tamanho, " ", STR_PAD_RIGHT);
    }
}