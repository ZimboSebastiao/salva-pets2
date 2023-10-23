<?php
namespace Salvapets;
abstract class Utilitarios {
    public static function dump(array | bool $dados):void {
        echo "<pre>";
        var_dump($dados);
        echo "</pre>";
    }
}