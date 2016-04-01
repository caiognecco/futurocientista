
function setaImagem() {
    var settings = {
        primeiraImg: function () {
            elemento = document.querySelector("#slider a:first-child");
            elemento.classList.add("ativo");
            this.legenda(elemento);
        },
        slide: function () {
            elemento = document.querySelector(".ativo");

            if (elemento.nextElementSibling) {
                elemento.nextElementSibling.classList.add("ativo");
                settings.legenda(elemento.nextElementSibling);
                elemento.classList.remove("ativo");
            } else {
                elemento.classList.remove("ativo");
                settings.primeiraImg();
            }

        },
        proximo: function () {
            clearInterval(intervalo);
            elemento = document.querySelector(".ativo");

            if (elemento.nextElementSibling) {
                elemento.nextElementSibling.classList.add("ativo");
                settings.legenda(elemento.nextElementSibling);
                elemento.classList.remove("ativo");
            } else {
                elemento.classList.remove("ativo");
                settings.primeiraImg();
            }
            intervalo = setInterval(settings.slide, 3000);
        },
        anterior: function () {
            clearInterval(intervalo);
            elemento = document.querySelector(".ativo");

            if (elemento.previousElementSibling) {
                elemento.previousElementSibling.classList.add("ativo");
                settings.legenda(elemento.previousElementSibling);
                elemento.classList.remove("ativo");
            } else {
                elemento.classList.remove("ativo");
                elemento = document.querySelector("a:last-child");
                elemento.classList.add("ativo");
                this.legenda(elemento);
            }
            intervalo = setInterval(settings.slide, 3000);
        },
        legenda: function (obj) {
            var legenda = obj.querySelector("img").getAttribute("alt");
            document.querySelector("#legenda").innerHTML = legenda;
        }

    }

    //chama o slide
    settings.primeiraImg();

    //chama a legenda
    settings.legenda(elemento);

    //chama o slide à um determinado tempo
    var intervalo = setInterval(settings.slide, 3000);
    document.querySelector(".next").addEventListener("click", settings.proximo, false);
    document.querySelector(".prev").addEventListener("click", settings.anterior, false);
}




function setaImagem1() {
    var settings = {
        primeiraImg: function () {
            elemento = document.querySelector("#slider1 a:first-child");
            elemento.classList.add("ativo1");
            this.legenda(elemento);
        },
        slide: function () {
            elemento = document.querySelector(".ativo1");

            if (elemento.nextElementSibling) {
                elemento.nextElementSibling.classList.add("ativo1");
                settings.legenda(elemento.nextElementSibling);
                elemento.classList.remove("ativo1");
            } else {
                elemento.classList.remove("ativo1");
                settings.primeiraImg();
            }

        },
        proximo: function () {
            clearInterval(intervalo);
            elemento = document.querySelector(".ativo1");

            if (elemento.nextElementSibling) {
                elemento.nextElementSibling.classList.add("ativo1");
                settings.legenda(elemento.nextElementSibling);
                elemento.classList.remove("ativo1");
            } else {
                elemento.classList.remove("ativo1");
                settings.primeiraImg();
            }
            intervalo = setInterval(settings.slide, 3000);
        },
        anterior: function () {
            clearInterval(intervalo);
            elemento = document.querySelector(".ativo1");

            if (elemento.previousElementSibling) {
                elemento.previousElementSibling.classList.add("ativo1");
                settings.legenda(elemento.previousElementSibling);
                elemento.classList.remove("ativo1");
            } else {
                elemento.classList.remove("ativo1");
                elemento = document.querySelector("a:last-child");
                elemento.classList.add("ativo1");
                this.legenda(elemento);
            }
            intervalo = setInterval(settings.slide, 3000);
        },
        legenda: function (obj) {
            var legenda = obj.querySelector("img").getAttribute("alt");
            document.querySelector("#legenda1").innerHTML = legenda;
        }

    }

    //chama o slide
    settings.primeiraImg();

    //chama a legenda
    settings.legenda(elemento);

    //chama o slide à um determinado tempo
    var intervalo = setInterval(settings.slide, 3000);
    document.querySelector(".next").addEventListener("click", settings.proximo, false);
    document.querySelector(".prev").addEventListener("click", settings.anterior, false);
}



window.addEventListener("load", setaImagem, false);
window.addEventListener("load", setaImagem1, false);