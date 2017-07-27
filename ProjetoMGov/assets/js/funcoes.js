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
    cpf = cpf.replace(".", "");
    cpf = cpf.replace(".", "");
    cpf = cpf.replace("-", "");
    var url = "dados.php?cpf=" + cpf;
    request.open("GET", url, true);
    request.onreadystatechange = function () {
        if (request.readyState < 4) {
            document.getElementById("divDados").innerHTML = cpf;
        } else if (request.readyState == 4 && request.status == 404) {
            document.getElementById("divDados").innerHTML = "Dados não encontrados.";
        } else if (request.readyState == 4 && request.status == 200) {
            var cliente = JSON.parse(request.responseText);
            document.getElementById("divDados").innerHTML =
                "<div class='ui clearing segment slide-down'>" +
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
    $('#cpf').mask("999.999.999-99");
    $(this.cliente.email).mask("A*****A@A****A.AAA");
        $('.searchForm').hide().transition({
            debug: true,
            animation: 'fly left',
            duration: 1000,
            interval: 200
        });

        $('.slide-down').transition({
            debug: true,
            animation: 'slide down',
            duration: 1000,
            interval: 200
        });

    }
)