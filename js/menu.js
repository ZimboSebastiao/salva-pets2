const botao = document.querySelector("nav h2");
const linksMenu = document.querySelector(".menu");
const icone = document.querySelector(".icone");
botao.addEventListener("click", function(event){
    event.preventDefault();
    linksMenu.classList.toggle("aberto")

    /* Lógica para alternância do texto/icone
    Se a classe "aberto" estiver aplicada os linksMenu, então mude o texto/icone para Fechar Senão continue o texte/icone "Menu" */

    if (linksMenu.classList.contains("aberto")) {
        icone.innerHTML = "&times;"
    } else {
        icone.innerHTML = "&equiv;"
    }
});