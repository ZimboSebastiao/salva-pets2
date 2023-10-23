<?php

namespace Salvapets;

final class ControleDeAcesso {

    public function __construct(){
        if(!isset($_SESSION)){
            session_start();
        }

    }


    public function verificaAcesso():void{
        if(!isset($_SESSION['id'])){
            session_destroy();
            header("location:../login.php?acesso_proibido");
            die();
        }
    }

    // public function verificaAcessoAdmin():void{
    //     // se o tipo de usuario logado na sessão não for admin
    //     if ($_SESSION["tipo"] != "admin") {
    //         header("location:nao-autorizado.php");
    //         die();
    //     }
    // }



    public function login(int $id, string $nome):void{
        $_SESSION["id"] = $id;
        $_SESSION["nome"] = $nome;
    }

    public function logout():void{
        session_start();
        session_destroy();
        header("location:../login.php?logout");
        die();
    }








}
    






?>