
# SalvaPets - Plataforma de Doação de Animais

Bem-vindo ao projeto SalvaPets! Este é um site fictício desenvolvido com o objetivo de ensinar conceitos de Front-End e Back-End na criação de uma plataforma de doação de animais.

![SalvaPets Logo](icones/pet.png)

## Descrição

composer require phpmailer/phpmailer
O SalvaPets é um projeto didático que simula uma plataforma online para a doação responsável de animais. O site permite que os usuários cadastrem animais que estão disponíveis para adoção, bem como permitindo que interessados encontrem e adotem esses animais.

## Funcionalidades

- Cadastro de animais para adoção, incluindo fotos e detalhes.
- Pesquisa e filtragem de animais por tipo, raça, localização, etc.
- Páginas individuais para cada animal com informações detalhadas.
- Formulário de adoção para os interessados em adotar um animal.
- Painel de administração para gerenciar os animais cadastrados.

## Tecnologias Utilizadas

- HTML, CSS e JavaScript para o Front-End.
- PHP para o Back-End.
- Banco de Dados (MySQL) para armazenar informações dos animais e usuários.

## Contribuição

Se você gostaria de contribuir para este projeto, fique à vontade para enviar um pull request. Caso encontre algum problema ou queira sugerir melhorias, abra uma issue.

## Licença

Este projeto é distribuído sob a licença MIT. Para mais detalhes, consulte o arquivo [LICENSE](LICENSE).

---

Este projeto foi criado com ❤️ como parte de um aprendizado prático de desenvolvimento web. Qualquer semelhança com situações reais é mera coincidência.

-----------------------------------------------------------------------------------------------------------------------------

Para criar um site de adoção de pets com os requisitos mencionados, você precisará de um modelo de banco de dados que permita armazenar informações sobre usuários, animais de estimação e as ações dos usuários (como favoritar um pet). Aqui está um exemplo simplificado do modelo físico do banco de dados:

Tabela de Usuários:

ID do Usuário (Chave Primária)
Nome
Sobrenome
Endereço de E-mail
Senha (criptografada)
Outras informações de perfil (por exemplo, número de telefone, endereço, etc.)
Tabela de Animais de Estimação:

ID do Animal de Estimação (Chave Primária)
Nome do Animal de Estimação
Espécie (cão, gato, etc.)
Raça
Idade
Gênero
Descrição
URL da Imagem (para uma foto do animal de estimação)
Status de Disponibilidade (para indicar se o animal está disponível para adoção)
Tabela de Favoritos:

ID do Favorito (Chave Primária)
ID do Usuário (Chave Estrangeira referenciando a Tabela de Usuários)
ID do Animal de Estimação (Chave Estrangeira referenciando a Tabela de Animais de Estimação)
Com esse modelo, os usuários podem se cadastrar no site e fornecer informações pessoais. Eles não precisam estar logados para favoritar um pet, pois a ação de favoritar é registrada na tabela de Favoritos e vinculada ao ID do usuário, mesmo que o usuário não esteja autenticado no momento da ação.

Para exibir informações sobre um animal de estimação, você pode criar páginas de detalhes que mostram os dados do animal, como nome, espécie, raça, idade, descrição e uma imagem. Essas informações podem ser obtidas da tabela de Animais de Estimação com base no ID do animal selecionado.

Lembre-se de implementar medidas de segurança adequadas para proteger os dados dos usuários, como o armazenamento seguro de senhas e a autenticação apropriada quando os usuários desejam acessar informações ou executar ações em seus perfis. Além disso, considere a conformidade com regulamentos de privacidade de dados, como o GDPR, se aplicável à sua região.


border-end-0 border rounded-pill