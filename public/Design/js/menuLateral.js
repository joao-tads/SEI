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