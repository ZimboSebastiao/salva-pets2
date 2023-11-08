document.getElementById("buscar-pets").addEventListener("click", function () {
    var cidadeSelecionada = document.getElementById("cidades").value;

    // Realize uma solicitação AJAX para buscar os pets com base na cidade
    fetch('buscar_pets.php?cidades=' + cidadeSelecionada)
        .then(response => response.text())
        .then(data => {
            document.getElementById("resultadoPets").innerHTML = data;
        })
        .catch(error => {
            console.error('Erro na solicitação: ' + error);
        });
});
