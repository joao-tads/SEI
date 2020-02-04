var check = 0;

function closeOpenNav() {
    if (check == 0) {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        check++;
    } else {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        check--;
    }
}

function formatar(mascara, documento) {
    var i = documento.value.length;
    var saida = mascara.substring(0, 1);
    var texto = mascara.substring(i)
    if (texto.substring(0, 1) != saida) {
        documento.value += texto.substring(0, 1);
    }
}

function Mascara(objeto) {
    if (objeto.value.length == 0)
        objeto.value = '(' + objeto.value;

    if (objeto.value.length == 3)
        objeto.value = objeto.value + ')';

    if (objeto.value.length == 4)
        objeto.value = objeto.value + ' ';

    if (objeto.value.length == 10)
        objeto.value = objeto.value + '-';
}
$("#pesquisar").on("input", function() {
    var filtro = event.target.value;
    if (filtro.length > 0) {
        var exp = new RegExp("^" + filtro, "i");
        $("tr").each(function(index) {
            var item = $("tbody tr")[index];
            testaExpressao(item, exp);
        });
    } else {
        $("tr").each(function(index) {
            var item = $("tbody tr")[index];
            item.classList.add("d-none");
            item.classList.remove("d-none");
        });
    }
});


function testaExpressao(item, exp) {
    if (exp.test(item.childNodes[1].textContent)) {
        item.classList.add("d-none");
        item.classList.remove("d-none");
    } else {
        item.classList.remove("d-none");
        item.classList.add("d-none");
    }
}