<?php
namespace Salvapets;

final class ControleDeAcesso {

    public function __construct() {
        if(!isset($_SESSION)){
            session_start();
        }
    }

    public function verificaAcesso():void {
        if( !isset($_SESSION['id']) ){
            session_destroy();
            header("location:../login.php?acesso_proibido");
            die(); 
        }
    }

    public function verificaAcessoUser():void {
        if (isset($_SESSION['nome'])){
            
        } 
    }


    public function login(int $id, string $nome):void {
        $_SESSION["id"] = $id;
        $_SESSION["nome"] = $nome;
    }


    public function logout():void {
        session_start();
        session_destroy();
        header("location:../login.php?logout");
        die();
    }

}