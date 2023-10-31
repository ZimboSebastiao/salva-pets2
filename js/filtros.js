document.getElementById('buscar').addEventListener('click', function () {
    var cidade = document.getElementById('cidade').value;
    // Faça uma solicitação para o servidor passando o valor da cidade
    var apiUrl = "http://localhost:8080/cidade/" + cidade;
    // Redirecione a página para a URL com a cidade
    // window.location.href = apiUrl;
  });