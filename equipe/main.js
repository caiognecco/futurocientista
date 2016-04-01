
var jsonOrgan = [{
    "id": 15,
    "cargo": "Diretor Presidente",
    "nome": "Fábio de Lima Leite ",
    "idcargo": 1,
    "pai": 0
}, {
    "id": 16,
    "cargo": "Vice-Diretora Presidenta",
    "nome": "Caroline Pavan Brandini",
    "idcargo": 2,
    "pai": 1
},  {    "id": 30,
    "cargo": "Superintendente de T.I",
    "nome": "Caio Perroni Gnecco",
    "idcargo": 7,
    "pai": 2
},  {    "id": 21,
    "cargo": "Superintendente de Eventos e Atividades",
    "nome": "César Gregório",
    "idcargo": 9,
    "pai": 2
},  {    "id": 28,
    "cargo": "Superintendente de Marketing",
    "nome": "Francine de Moraes",
    "idcargo": 14,
    "pai": 2
}, {    "id": 23,
    "cargo": "Superintendente Educacional e Social",
    "nome": "Lucimari Gimenez",
    "idcargo": 16,
    "pai": 2
},  {    "id": 30,
    "cargo": "Superintendente de Comunicação",
    "nome": "Míriam Bonora dos Santos",
    "idcargo": 17,
    "pai": 2
},  {    "id": 30,
    "cargo": "Superintendente Científica",
    "nome": "Moema A. Hausen",
    "idcargo": 18,
    "pai": 2
},  {    "id": 30,
    "cargo": "Superintendente de Prospecão e Negócios (Setor Público)",
    "nome": "José Carlos Tallarico Neto",
    "idcargo": 19,
    "pai": 2
},  {    "id": 30,
    "cargo": "Superintendente de Prospecão e Negócios (Setor Privado)",
    "nome": "Verônica Leal",
    "idcargo": 20,
    "pai": 2
}, {    "id": 24,
    "cargo": "Supervisores Educacionais e Coordenadores Locais",
    "nome": "",
    "idcargo": 10,
    "pai": 16
}, {    "id": 25,
    "cargo": "Nucleadores",
    "nome": "",
    "idcargo": 11,
    "pai": 16
}, {    "id": 26,
    "cargo": "Embaixadores",
    "nome": "",
    "idcargo": 12,
    "pai": 10
}, {    "id": 27,
    "cargo": "Clubes de ciências",
    "nome": "",
    "idcargo": 13,
    "pai": 12
},  {    "id": 28,
    "cargo": "Multiplicadores do Conhecimento",
    "nome": "",
    "idcargo": 40,
    "pai": 18
},  {    "id": 29,
    "cargo": "Coodenador(a) do Concurso de Curtas",
    "nome": "",
    "idcargo": 31,
    "pai": 9
},  {    "id": 30,
    "cargo": "Coodenador(a) do Concurso Literário",
    "nome": "",
    "idcargo": 32,
    "pai": 9
},  {    "id": 31,
    "cargo": "Coodenador(a) da Maratona do Conhecimento",
    "nome": "",
    "idcargo": 33,
    "pai": 9
},  {    "id": 32,
    "cargo": "Coodenador(a) da E.P.F.C",
    "nome": "",
    "idcargo": 34,
    "pai": 9
},  {    "id": 33,
    "cargo": "Coodenador(a) do E.N.F.C",
    "nome": "",
    "idcargo": 35,
    "pai": 9
},  {    "id": 34,
    "cargo": "Coodenador(a) de Campanhas Sociais",
    "nome": "",
    "idcargo": 36,
    "pai": 9
},  {    "id": 35,
    "cargo": "Webmaster",
    "nome": "Bernardo Camargo",
    "idcargo": 37,
    "pai": 7
}];


var $organogramaEx = $("#organograma-exemplo"),
    fnShowHide,
    fnOffset,
    fnTamanhoHorizontal;

/***************************************************************************
    Criação do fluxograma no DOM
***************************************************************************/

(function createDOM() {
    var ul, li, div, docfrag, i = 0;
    for (var property in jsonOrgan) {
        if (jsonOrgan.hasOwnProperty(property)) {
            if (!document.getElementById("ul-" + jsonOrgan[property].pai)) {
                docfrag = document.createDocumentFragment();
                i++;
                if (i > 2) {
                    //var divZoom
                    //<div class="zoom mais"></div>
                    divZoom = document.createElement("div");
                    divZoom.setAttribute("class", "zoom mais");

                    //var divBarraHorizontal
                    //<div class="barrahorizontal"></div>
                    divBarraHorizontal = document.createElement("div");
                    divBarraHorizontal.setAttribute("class","barrahorizontal");
                    divZoom.appendChild(divBarraHorizontal);

                    //var divBarraVertical
                    //<div class="barravertical"></div>
                    divBarraVertical = document.createElement("div");
                    divBarraVertical.setAttribute("class","barravertical");
                    divZoom.appendChild(divBarraVertical);

                    //var divZoom
                    // <div class="zoom mais">
                        // <div class="barrahorizontal"></div>
                        // <div class="barravertical"></div>
                    // </div>

                    docfrag.appendChild(divZoom)
                }

                //var ul
                //<ul id="ul-" + jsonOrgan[property].pai" class="hide"></ul>
                ul = document.createElement("ul");
                ul.setAttribute("id", "ul-" + jsonOrgan[property].pai);
                ul.setAttribute("class", "hide");
                docfrag.appendChild(ul);

                document.getElementById("li-" + jsonOrgan[property].pai).appendChild(docfrag)
            }

            //var li
            //<li id="li-" + jsonOrgan[property].idcargo></li>
            li = document.createElement("li");
            li.setAttribute("id", "li-" + jsonOrgan[property].idcargo);
            document.getElementById("ul-" + jsonOrgan[property].pai).appendChild(li).innerHTML = '<div class="wrap-infos wrap-infos-padrao">' + '<p class="nome">' + jsonOrgan[property].nome + "</p>" + '<p class="cargo">' + jsonOrgan[property].cargo + "</p>" + "</div>"
        }
    }
})();

/***************************************************************************
    Tamanho horizontal (scrollbar) da tela
 ***************************************************************************/

fnTamanhoHorizontal = function () {
    var l = [];
    $organogramaEx
        .css("width", 10000);
    $organogramaEx
        .find("ul")
        .not(".hide")
        .each(function(i) {
            l[i] = $(this).width()
    });
    l.sort(function(a, b) {
        return a - b
    });
    l.pop();
    $organogramaEx
        .css("width", l.pop())
}

/***************************************************************************
    Click nos Botões de Zoom
***************************************************************************/

fnShowHide = function(element) {
    element
        .toggleClass("mais")
        .toggleClass("menos");
    element
        .siblings("ul")
        .toggleClass("hide");
    $(".hightlight")
        .removeClass("hightlight");
    element
        .prevAll(".wrap-infos")
        .addClass("hightlight");
};


/***************************************************************************
    Alinhando o ramo ativo mais próximo do centro da tela.
   ***************************************************************************/

fnOffset = function($btn) {
    var l, t;
    l = $btn
            .prevAll(".wrap-infos")
            .offset()
            .left;
    t = $btn
            .prevAll(".wrap-infos")
            .offset()
            .top;

    setTimeout(function() {
        $(document).scrollLeft(l - $(window).width() / 2 + 60);
        $(document).scrollTop(t)
    }, 25)
};

$organogramaEx.find(".zoom").each(function() {
    var $thisButton = $(this);
    $thisButton.on("click", function() {
        fnShowHide($thisButton);
        fnTamanhoHorizontal();
        fnOffset($thisButton)
    })
});

$("#organograma-infos").find(".zoom").each(function() {
    var $thisButton = $(this);
    $thisButton.on("click", function() {
        fnShowHide($thisButton)
    })
});

/***************************************************************************
    Seletores Adicionais
   ***************************************************************************/

$(".organograma li:last-child")
	.addClass("ultimo-filho");
$(".organograma li:only-child")
	.addClass("filho-unico");

/***************************************************************************
    Ramos a mostrar logo após carregamento da página
   ***************************************************************************/

$("#ul-1,#ul-2")
	.removeClass("hide");

fnTamanhoHorizontal();