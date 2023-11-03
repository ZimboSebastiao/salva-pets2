document.getElementById('buscar').addEventListener('click', function () {
  const cidadeFiltro = document.getElementById('cidade').value;
  const regiaoFiltro = document.getElementById('regiao').value;
  const regiaoIdade = document.getElementById('idade').value;
  const regiaoRaca = document.getElementById('raca').value;
  const animalFiltro = document.getElementById('animal').value;
  // Adicione aqui outros filtros, como idade e raça, se necessário.

  const cardsAnimais = document.querySelectorAll('.card-item'); // Selecione os elementos dos cards

  cardsAnimais.forEach(card => {
      const localizacao = card.querySelector('.loc-pets').textContent;
      const nomeAnimal = card.querySelector('.nome-pets').textContent;
      const idade = card.querySelector('.card-text').textContent;
      // console.log("teste", localizacao);
      // console.log("Nome : ", nomeAnimal);
      // Pegue o elemento com o atributo data-pets
var cardContainer = document.querySelector('.card-container');
var petsData = JSON.parse(cardContainer.getAttribute('data-pets'));

// Agora você pode acessar os valores em JavaScript
petsData.forEach(function (pet) {
    var nome = pet.nome;
    var idade = pet.idade;
    var sobre = pet.sobre;
    var localizacao = pet.localizacao;
    var cidade = pet.cidade;
    var regiao = pet.regiao;
    var sexo = pet.sexo;
    var imagem = pet.imagem;

    // Faça o que quiser com os valores
    console.log(nome, idade, localizacao, cidade, regiao, sexo, imagem);
});

      // Verifique se o card corresponde aos critérios de filtro
      const correspondeFiltro = cidade.includes(cidadeFiltro) &&
                               regiao.includes(regiaoFiltro) &&
                               idade.includes(idadeFiltro) &&
                               sexo.includes(sexoFiltro) &&
                               nomeAnimal.includes(animalFiltro);
      // Adicione aqui outras condições para outros filtros.

      // Exiba ou oculte o card com base no resultado do filtro
      if (correspondeFiltro) {
          card.style.display = 'block'; // Mostrar o card
      } else {
          card.style.display = 'none'; // Ocultar o card
      }
  });
});
