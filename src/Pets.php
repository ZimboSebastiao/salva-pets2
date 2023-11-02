<?php 
namespace Salvapets;
use PDO, Exception;


class Pets {
    private int $id;
    private string $nome;
    private string $tipo;
    private string $imagem;
    private string $idade;
    private string $localizacao;
    private string $sexo;
    private string $descricao;
    private string $sobre;
    private int $id_usuario;

    private PDO $conexao;

    public function __construct(){
       $this->conexao = Banco::conecta(); 
    }
    

    public function inserirPets():void {
      
        
        $sql = "INSERT INTO favoritos(
            nome, tipo, imagem, idade, localizacao, sexo, descricao, sobre, id_usuario
        ) VALUES(
            :nome, :tipo, :imagem, :idade, :localizacao, :sexo, :descricao, :sobre, :id_usuario
        )";
        
    
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":nome", $this->nome, PDO::PARAM_STR);
            $consulta->bindValue(":tipo", $this->tipo, PDO::PARAM_STR);
            $consulta->bindValue(":imagem", $this->imagem, PDO::PARAM_STR);
            $consulta->bindValue(":idade", $this->idade, PDO::PARAM_STR);
            $consulta->bindValue(":localizacao", $this->localizacao, PDO::PARAM_STR);
            $consulta->bindValue(":sexo", $this->sexo, PDO::PARAM_STR);
            $consulta->bindValue(":descricao", $this->descricao, PDO::PARAM_STR);
            $consulta->bindValue(":sobre", $this->sobre, PDO::PARAM_STR);
            $consulta->bindValue(":id_usuario", $this->id_usuario, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro ao inserir: ".$erro->getMessage());
        }
    }


    public function listarpets():array {
        $sql = "SELECT * FROM favoritos ORDER BY nome";
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: ".$erro->getMessage());
        }    
    
        return $resultado;
    } 


    // public function lerUmPet():array {
    //     $sql = "SELECT * FROM pets WHERE id = :id";
    //     try {
    //         $consulta = $this->conexao->prepare($sql);
    //         $consulta->bindValue(":id", $this->id, PDO::PARAM_INT);
    //         $consulta->execute();
    //         $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    //     } catch (Exception $erro) {
    //         die("Erro ao carregar dados: ".$erro->getMessage());
    //     }    
    //     return $resultado;
    // }





    


    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): self
    {
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        return $this;
    }


    public function getNome(): string
    {
        return $this->nome;
    }


    public function setNome(string $nome): self
    {
        $this->nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }


   




    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of imagem
     */ 
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     *
     * @return  self
     */ 
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of localizacao
     */ 
    public function getLocalizacao()
    {
        return $this->localizacao;
    }

    /**
     * Set the value of localizacao
     *
     * @return  self
     */ 
    public function setLocalizacao($localizacao)
    {
        $this->localizacao = $localizacao;

        return $this;
    }

    /**
     * Get the value of sexo
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */ 
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of sobre
     */ 
    public function getSobre()
    {
        return $this->sobre;
    }

    /**
     * Set the value of sobre
     *
     * @return  self
     */ 
    public function setSobre($sobre)
    {
        $this->sobre = $sobre;

        return $this;
    }



    /**
     * Get the value of id_usuario
     */ 
    public function getId_usuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set the value of id_usuario
     *
     * @return  self
     */ 
    public function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }
}





?>