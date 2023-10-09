<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplo de PHP com API</title>
</head>
<body>
    <div class="imagens-api limitador">
        <?php
        $apiUrl = "https://salvapets.onrender.com/pets/"; // Substitua pelo URL real da API

        // Faz a solicitação à API e obtém os dados
        $apiData = file_get_contents($apiUrl);

        if ($apiData) {
            // Converte a resposta JSON em um array PHP
            $data = json_decode($apiData, true);

            if ($data) {
                foreach ($data as $pet) {
                    $nome = $pet['nome'];
                    $idade = $pet['idade'];
                    $imagem = $pet['imagem'];

                    // Corrija a URL da imagem
                    $imagemUrl = "https://salvapets.onrender.com" . $imagem;

                    echo "<div class='card border' style='width: 18rem;'>";
                    echo "<img src='$imagemUrl' class='card-img-top' alt='$nome'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>$nome</h5>";
                    echo "<p class='card-text'>Idade: $idade</p>";
                    // Você pode adicionar mais informações aqui se desejar
                    echo "<a href='#' class='btn btn-primary'>Go somewhere</a>";
                    echo "</div></div>";
                }
            } else {
                echo "<p>Ocorreu um erro ao analisar os dados da API.</p>";
            }
        } else {
            echo "<p>Ocorreu um erro ao buscar os dados da API.</p>";
        }
        ?>
    </div>
</body>
</html>
