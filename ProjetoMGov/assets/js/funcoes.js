$('document').ready(function (e) {
    $('.searchForm').hide().transition({
        debug: true,
        animation: 'fly left',
        duration: 1000,
        interval: 200
    });
    }
)


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
    var cpf = document.getElementById("cpf").value;
    var url = "dados.php?cpf=" + cpf;
    request.open("GET", url, true);
    request.onreadystatechange = function () {
        if (request.readyState < 4) {
            document.getElementById("divDados").innerHTML = "Buscando dados";
        } else if (request.readyState == 4 && request.status == 404) {
            document.getElementById("divDados").innerHTML = "Dados não encontrados.";
        } else if (request.readyState == 4 && request.status == 200) {
            var dados = JSON.parse(request.responseText);
            document.getElementById("divDados").innerHTML =
                "<p>Nome: " + dados.nome + "</p>" +
                "<p>E-mail: " + dados.email + "</p>" +
                "<p>CPF: " + dados.cpf + "</p>" +
                "<p>Celular: " + dados.celular + "</p>";
        }
    };
    request.send();
}
