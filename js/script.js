document.addEventListener("DOMContentLoaded", () => {

    const comanda = document.getElementById("comanda");
    const botaoAbrir = document.getElementById("abrir-comanda");
    const overlay = document.getElementById("overlay");

    if (comanda){

        botaoAbrir.disabled = true;
        botaoAbrir.style.opacity = "0.5";
        botaoAbrir.style.cursor = "not-allowed";
        overlay.style.display = "inline";

        const botaoFechar = document.getElementById("fechar-comanda");

        botaoFechar.addEventListener("click", () => {
            overlay.style.display = "none";
            comanda.style.display = "none";
            botaoAbrir.disabled = false;
            botaoAbrir.style.opacity = "1";
            botaoAbrir.style.cursor = "pointer";       
        });
    }

});