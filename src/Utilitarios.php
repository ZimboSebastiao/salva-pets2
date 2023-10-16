<?php 

namespace SalvaPets;

abstract class Utilitarios {


    public static function anos(array | bool $idade):void {
       
        $dataNascimento = strtotime($idade);
        $dataAtual = time();

        if ($dataNascimento !== false) {
          $diferencaSegundos = $dataAtual - $dataNascimento;
  
          $anos = floor($diferencaSegundos / (365 * 24 * 60 * 60)); }
          $meses = floor(($diferencaSegundos % (365 * 24 * 60 * 60)) / (30 * 24 * 60 * 60));
    }
}

    // public static function formatarPreco( float $valor ):string {
    //     $apiUrl = "https://salvapets.onrender.com/pets/";  
    
    //     // Faz a solicitação à API e obtém os dados
    //     $apiData = file_get_contents($apiUrl);
      
    //     if ($apiData) {
    //         // Converte a resposta JSON em um array PHP
    //         $data = json_decode($apiData, true);
      
    //         if ($data) {
    //             foreach ($data as $pet) {
    //                 $nome = $pet['nome'];
    //                 $idade = $pet['idade'];
    //                 $sobre = $pet['sobre'];
    //                 $localizacao = $pet['localizacao'];
    //                 $sexo = $pet['sexo'];
    //                 $imagem = $pet['imagem'];
      
                    
    //                 $imagemUrl = "https://salvapets.onrender.com" . $imagem;
    // }

    // public static function calcularTotal(float $valor, int $qtd):string {
    //     $total = $valor * $qtd;
    //     return self::formatarPreco($total);
    // }

?>