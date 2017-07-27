function buscarMetodo(){
    var metodo = document.getElementById("busca");
    var metodoSelecionado = metodo.options[metodo.selectedIndex].value;
    if(metodoSelecionado == "") {
        document.getElementById("searchButton").className="ui teal disabled button";
    } else{
        document.getElementById("searchButton").className="ui teal button";
        if(metodoSelecionado == "email"){
            document.getElementById("inputEmail").type="text";
            document.getElementById("inputCPF").type="hidden";
            document.getElementById("inputCel").type="hidden";
            document.getElementById("inputCPF").value="";
            document.getElementById("inputCel").value="";
        } else if(metodoSelecionado == "cpf"){
            document.getElementById("inputEmail").type="hidden";
            document.getElementById("inputCPF").type="text";
            document.getElementById("inputCel").type="hidden";
            document.getElementById("inputEmail").value="";
            document.getElementById("inputCel").value="";
        } else{
            document.getElementById("inputEmail").type="hidden";
            document.getElementById("inputCPF").type="hidden";
            document.getElementById("inputCel").type="text";
            document.getElementById("inputEmail").value="";
            document.getElementById("inputCPF").value="";
        }
    }
    return metodoSelecionado;
}

function getRequest() {
    var ajax;
    if (window.XMLHttpRequest) {
        ajax = new XMLHttpRequest;
    } else if (window.ActiveXObject) {
        ajax = new ActiveXObject;
    }
    return ajax;
}

function getDados() {
    var request = getRequest();
    var dado;

    if(document.getElementById("inputEmail").value != "" && document.getElementById("inputCPF").value == "" && document.getElementById("inputCel").value == ""){
        dado = document.getElementById("inputEmail").value;
    } else if(document.getElementById("inputEmail").value == "" && document.getElementById("inputCPF").value != "" && document.getElementById("inputCel").value == ""){
        dado = document.getElementById("inputCPF").value;
        dado = dado.replace(".", "");
        dado = dado.replace(".", "");
        dado = dado.replace("-", "");
    } else if(document.getElementById("inputEmail").value == "" && document.getElementById("inputCPF").value == "" && document.getElementById("inputCel").value != ""){
        dado = document.getElementById("inputCel").value;
        dado = dado.replace("(", "");
        dado = dado.replace(")", "");
        dado = dado.replace("-", "");
    }

    var metodo = buscarMetodo() + "=";
    var url = "dados.php?" + metodo + dado;

    request.open("GET", url, true);
    request.onreadystatechange = function () {
        if (request.readyState < 4) {
            document.getElementById("divDados").innerHTML = "Dados não encontrados";

        } else if (request.readyState == 4 && request.status == 404) {
            document.getElementById("divDados").innerHTML = "Erro 404. Página não encontrada.";
        } else if (request.readyState == 4 && request.status == 200) {
            var cliente = JSON.parse(request.responseText);
            document.getElementById("teste").innerHTML = dado;
            document.getElementById("divDados").innerHTML =
                "<div class='ui clearing segment'>" +
                    "<h3 class='ui dividing header'>Informações sobre o cliente</h3>" +
                    "<div class='field'>" +
                        "<h5 class='ui header'>Nome:</h5>" + cliente.nome +
                    "</div>" +
                    "<div class='field'>" +
                        "<h5 class='ui header'>E-mail:</h5>" + cliente.email +
                    "</div>" +
                    "<div class='field'>" +
                        "<h5 class='ui header'>CPF:</h5>" + cliente.cpf +
                    "</div>" +
                    "<div class='field'>" +
                        "<h5 class='ui header'>Celular:</h5>" + cliente.celular +
                    "</div>" +
                "</div>"

        }
    };
    request.send();
    dado ="";
}

$('document').ready(function (e) {
    $('.ui.dropdown').dropdown();
    $('#inputCPF').mask("999.999.999-99");
    $('#inputCel').mask("(99)99999-9999");

        $('.searchForm').hide().transition({
            debug: true,
            animation: 'fly left',
            duration: 1000,
            interval: 200
        });
    }
)