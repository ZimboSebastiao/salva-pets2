<?php
function InserirUsuario(PDO $conexao,string $nome, string $email,int $cep, string $senhaHash):void{
    $sql = "INSERT INTO usuarios(nome,email,cep,senha) VALUES (:nome,:email,:cep,:senha)";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":nome",$nome,PDO::PARAM_STR);
        $consulta->bindValue(":email",$email,PDO::PARAM_STR);
        $consulta->bindValue(":cep",$cep,PDO::PARAM_INT);
        $consulta->bindValue(":senha",$senhaHash,PDO::PARAM_STR);
        $consulta->execute();
    } catch (Exception $erro) {
        die("Erro ao Inserir: ".$erro->getMessage());
    }
} // Fim inserirUsuario

function LerUsuario (PDO $conexao):array{
    $sql = "SELECT nome,email,cep,senha FROM usuarios";
    try {
        $consulta = $conexao->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro ao Ler Usuário: ".$erro->getMessage());
    }
    return $resultado;
}