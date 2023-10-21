<?php
namespace SalvaPets;
use PDO, Exception;

abstract class Banco {
    private static string $servidor = "db4free.net";
    private static string $usuario = "salvapets";
    private static string $senha = "Salvapets123@";
    private static string $banco = "petsapi";
    private static PDO $conexao; 

    public static function conecta():PDO {
        try {
            self::$conexao = new PDO(
                "mysql:host=".self::$servidor."; 
                dbname=".self::$banco.";
                charset=utf8",
                self::$usuario, 
                self::$senha
            );
            self::$conexao->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $erro) {
            die("Deu ruim: ".$erro->getMessage());
        }
        return self::$conexao;
    }
}