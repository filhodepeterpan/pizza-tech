document.addEventListener("DOMContentLoaded", () => {

    const comanda = document.getElementById("comanda");
    const botaoAbrir = document.getElementById("abrir-comanda");

    if (comanda){

        botaoAbrir.disabled = true;
        botaoAbrir.style.opacity = "0.5";
        botaoAbrir.style.cursor = "not-allowed";

        const botaoFechar = document.getElementById("fechar-comanda");

        botaoFechar.addEventListener("click", () => {
            comanda.style.display = "none";
            botaoAbrir.disabled = false;
            botaoAbrir.style.opacity = "1";
            botaoAbrir.style.cursor = "pointer";
        });
    }

});