<?php
    namespace Salvapets;
    use PDO, Exception;
    require_once __DIR__ . '/../vendor/autoload.php';

    class Pets{
        private string $regiao;
        private string $cidade;
        private PDO $conexao;

        public function __construct(){
            $this->conexao = Banco::conecta(); 
         }
        

         public function lerPets():array{
             $sql = "SELECT DISTINCT cidade FROM pets";

            try {
                 $consulta = $this->conexao->prepare($sql);
                 $consulta->execute();
                 $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
             } catch (Exception $erro) {
                 die("Erro: ".$erro->getMessage());
             }    
        
             return $resultado;
        }


        public function lerCidade():array{
            $sql = "SELECT * FROM pets WHERE cidade = :cidade";

            try {
                $consulta = $this->conexao->prepare($sql);
                $consulta->bindValue(":cidade", $this->cidade, PDO::PARAM_STR);
                $consulta->execute();
                $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $erro) {
                die("Erro: ".$erro->getMessage());
            }    
       
            return $resultado;
            
        }














        public function getRegiao(): string
    {
        return $this->regiao;
    }


    public function setRegiao(string $regiao): self
    {
        $this->regiao = filter_var($regiao, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }


    public function setCidade(string $cidade): self
    {
        $this->cidade = filter_var($cidade, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }


    }

?>