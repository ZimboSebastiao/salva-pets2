<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
    .main-contact {
    width: 1000px;
    margin: 0 auto;
    font-size: 20px;

}

.form-contact {
    margin: 40px 0;
 }

.entry-label {
    display: block;
    margin: 8px auto;
    width: 50%;
}

.entry, .form-contact textarea {
    display: block;
    margin: 0 auto 25px;
    padding: 4px 9px;
    font-size: 18px;
    width: 50%;
    box-sizing: border-box;
    resize: none;
    overflow: auto;
}

#checkbox, .div-entry {
    margin: 30px auto;
}
  </style>
  <body>

  <!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Contatos - Barbearia Alura</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <main class="main-contact">
        <form class="form-contact">
            <label class="entry-label" for="name">Nome Completo</label>
            <input class="entry" type="text" name="" id="name" required>

            <label class="entry-label" for="email">Email</label>
            <input class="entry" type="email" name="" id="email" required>

            <label class="entry-label" for="phone">Número para contato</label>
            <input class="entry" type="tel" name="" id="phone" required>

            <label class="entry-label" for="message">Deixe aqui sua mensagem</label>
            <textarea class="entry" name="" id="message" cols="30" rows="10"></textarea>

            <label for="check-mailing" class="entry-label" id="checkbox">Gostaria de receber nossas novidades por email?
                <input type="checkbox" name="" id="check-mailing"></label>

            <input class="entry" type="submit" value="Enviar formulário">
        </form>
    </main>

</body>

</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>