function somaHora(hrA, hrB) {
    if (!validaCargaHoraria(hrA) || !validaCargaHoraria(hrB)) return "00:00";

    hrA = hrA.split(':');
    hrB = hrB.split(':');
    hrA[0] = hrA[0] * 1;
    hrA[1] = hrA[1] * 1;
    hrB[0] = hrB[0] * 1;
    hrB[1] = hrB[1] * 1;

    var resultado = [0, 0];
    resultado[0] = hrA[0] + hrB[0];

    if (hrA[1] + hrB[1] >= 60) {
        resultado[0] += 1;
        resultado[1] = (hrA[1] + hrB[1]) % 60;
    } else {
        resultado[1] = hrA[1] + hrB[1];
    }

    resultado[0] = resultado[0].toString().length == 1 ? ("0" + resultado[0]) : resultado[0];
    resultado[1] = resultado[1].toString().length == 1 ? ("0" + resultado[1]) : resultado[1];

    return resultado[0] + ':' + resultado[1];
}

function calculaHoraTotal(qtdLinhas) {
    var soma = "00:00";
    for (var i = 0; i < qtdLinhas; i++) {
        var horario = $('#inputCargaHoraria' + i).val();
        soma = somaHora(soma, horario, false);
    }
    return soma;
}

$(document).ready(function () {
    var qtdLinhas = 0;
    var tempoTotal = [0, 0];
    var auxTempo = [0, 0];

    $("#linhaBotoes").on("click", "#botaoAdicionar", function () {
        var stringlinha = $("<div class=\"form-row\" id=\"linhaDiaria" + qtdLinhas + "\">" +
            "<div class=\"col-sm-12 col-md-3\">" +
            "<div class=\"form-group\">" +
            "<label for=\"inputData\">Data</label>" +
            "<input type=\"date\" class=\"form-control\" name=\"inputData" + qtdLinhas + "\" id=\"inputData" + qtdLinhas + "\" required>" +
            "</div>" +
            "</div>" +
            "<div class=\"col-sm-12 col-md-2\">" +
            "<div class=\"form-group\">" +
            "<label for=\"inputCargaHoraria\">Carga Horária</label>" +
            "<input type=\"time\" class=\"form-control\" name=\"inputCargaHoraria" + qtdLinhas + "\" id=\"inputCargaHoraria" + qtdLinhas + "\" required>" +
            "</div>" +
            "</div>" +
            "<div class=\"col-sm-12 col-md-3\">" +
            "<div class=\"form-group\">" +
            "<label for=\"inputSetor\">Setor</label>" +
            "<input type=\"text\" class=\"form-control\" name=\"inputSetor" + qtdLinhas + "\" id=\"inputSetor" + qtdLinhas + "\" required>" +
            "</div>" +
            "</div>" +
            "<div class=\"col-sm-12 col-md-4\">" +
            "<div class=\"form-group\">" +
            "<label for=\"inputAtividade\">Atividade Desenvolvida</label>" +
            "<input type=\"text\" class=\"form-control\" name=\"inputAtividade" + qtdLinhas + "\" id=\"inputAtividade" + qtdLinhas + "\" required>" +
            "</div>" +
            "</div>" +
            "</div>");

        $("#linhaEstagio").append(stringlinha);

        $('#inputCargaHoraria' + qtdLinhas).keyup(function (e) {
            if (validaHora($(e.target).val())) {
                $('#CargaHorariaTotal').val(calculaHoraTotal(qtdLinhas));
            }
        });

        qtdLinhas++;
    });

    $("#botaoRemover").click(function () {
        qtdLinhas--;
        $("#linhaDiaria" + qtdLinhas).remove();
        $('#CargaHorariaTotal').val(calculaHoraTotal(qtdLinhas));
    });
});
