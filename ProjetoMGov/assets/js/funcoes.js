function buscarMetodo(){
    var metodo = document.getElementById("busca");
    var metodoSelecionado = metodo.options[metodo.selectedIndex].value;
    if(metodoSelecionado == "") {
        document.getElementById("searchButton").className="ui teal disabled button";
    } else{
        document.getElementById("searchButton").className="ui teal button";
        if(metodoSelecionado == "nome"){
            document.getElementById("inputNome").type="text";
            document.getElementById("inputCPF").type="hidden";
            document.getElementById("inputCel").type="hidden";
        } else if(metodoSelecionado == "cpf"){
            document.getElementById("inputNome").type="hidden";
            document.getElementById("inputCPF").type="text";
            document.getElementById("inputCel").type="hidden";
        } else{
            document.getElementById("inputNome").type="hidden";
            document.getElementById("inputCPF").type="hidden";
            document.getElementById("inputCel").type="text";
        }
    }
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
    var cpf = document.getElementById("inputCPF").value;
    cpf = cpf.replace(".", "");
    cpf = cpf.replace(".", "");
    cpf = cpf.replace("-", "");
    var url = "dados.php?cpf=" + cpf;
    request.open("GET", url, true);
    request.onreadystatechange = function () {
        if (request.readyState < 4) {
            document.getElementById("divDados").innerHTML = "Dados não encontrados";
            document.getElementById("divDados").innerHTML = cpf;
        } else if (request.readyState == 4 && request.status == 404) {
            document.getElementById("divDados").innerHTML = "Erro 404. Página não encontrada.";
        } else if (request.readyState == 4 && request.status == 200) {
            var cliente = JSON.parse(request.responseText);
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