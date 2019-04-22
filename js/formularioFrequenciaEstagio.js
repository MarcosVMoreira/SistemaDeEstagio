var qtdLinhas = 0;
var tempoTotal = [0, 0];
var auxTempo;

$(document).ready(function () {
        console.log(qtdLinhas);
    
    $("#inputCargaHoraria").focusout(function(){
        console.log("oi");
        
        var aux = $("#inputCargaHoraria" + qtdLinhas).val() + "";
        var auxTempo = aux.split(':');
        console.log(auxTempo);
        tempoTotal[0] += auxTempo[0];
        aux = tempoTotal[1];
        aux += auxTempo[1];
        var aux2 = aux/60;
        aux2.split('.');
        tempoTotal[0] += aux2[0];
        tempoTotal[1] += aux2[1];
        
        
        tempoTotal = [0, 0];
            for (var i = 0; i <= qtdLinhas; i++) {
                var aux = $("#inputCargaHoraria" + i).val() + "";
                var auxTempo = aux.split(':');
                console.log(auxTempo);
                for (var j = 0; j < auxTempo.length; j++) {
                    tempoTotal[j] += parseInt(auxTempo[j]);
                }
            }
        var stringCargaHoraria = $("<label for=\"CargaHorariaTotal\">Carga Horária Total</label>" +
                                "<input type=\"text\" class=\"form-control\" name=\"CargaHorariaTotal\" id=\"CargaHorariaTotal\">");
        $("#divCargaHorariaTotal").append(stringCargaHoraria);
    });

    $("#botaoAdicionar").click(function () {
        var stringlinha = $("<div class=\"form-row\" id=\"qtdLinhas-" + qtdLinhas + "\">" +
            "<div class=\"col-sm-12 col-md-3\">" +
            "<div class=\"form-group\">" +
            "<label for=\"inputData\">Data</label>" +
            "<input type=\"date\" class=\"form-control\" name=\"inputData" + qtdLinhas + "\" id=\"inputData\" required>" +
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
            "<input type=\"text\" class=\"form-control\" name=\"inputSetor" + qtdLinhas + "\" id=\"inputSetor\" required>" +
            "</div>" +
            "</div>" +
            "<div class=\"col-sm-12 col-md-4\">" +
            "<div class=\"form-group\">" +
            "<label for=\"inputAtividade\">Atividade Desenvolvida</label>" +
            "<input type=\"text\" class=\"form-control\" name=\"inputAtividade" + qtdLinhas + "\" id=\"inputAtividade\" required>" +
            "</div>" +
            "</div>" +
            "</div>");
        var empty = false;
        $("input").each(function () {
            if ($(this).val() == "") {
                empty = true;
                return true;
            }
        });
        if (empty == false) {
            
            $("#linhaEstagio").append(stringlinha);
            qtdLinhas++;
        }

    });
    $("#botaoRemover").click(function () {
        qtdLinhas--;
        $("#qtdLinhas-" + qtdLinhas).remove();
    });
});
