$(document).ready(function () {
var qtdLinhas = 0;
var tempoTotal = [0, 0];
var auxTempo = [0,0];
    
    
    
/*    $("#inputCargaHoraria"+qtdLinhas).focusout(function(){
        console.log("oi");
        var aux = $("#inputCargaHoraria" + qtdLinhas).val();
        auxTempo = aux.split(':');
        console.log(auxTempo);
        aux = tempoTotal[1] + auxTempo[1]; // auxiliar recebe a soma dos minutos sem tratamento
        aux = aux/60; // trata
        aux.split('.');
        tempoTotal[0] = tempoTotal[0] + auxTempo[0] + aux[0];  /// soma as horas 
        tempoTotal[1] += aux[1]; // soma os minutos totais e auxiliares
        
        console.log(tempototal);
        
        
        
        
        var stringCargaHoraria = $("<label for=\"CargaHorariaTotal\">Carga Horária Total</label>" +
                                "<input type=\"text\" class=\"form-control\" name=\"CargaHorariaTotal\" id=\"CargaHorariaTotal\">");
        $("#divCargaHorariaTotal").append(stringCargaHoraria);
    });*/
    

    $("#linhaBotoes").on("click", "#botaoAdicionar", function() {
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
        
        var empty = false;
        $("linhaDiaria").each(function () {
            if ($(this).val() == "") {
                empty = true;
                return true;
            }
        });
        if (empty == false) {
            qtdLinhas++;
            $("#linhaEstagio").append(stringlinha);    
        }
        
        

    });
    
    
    
    $("#linhaEstagio").on("focusout", "#inputCargaHoraria"+qtdLinhas, function(){
        console.log("entrou aqui porra");
        console.log("quant: " + qtdLinhas);
        var aux = $("#inputCargaHoraria"+qtdLinhas).val();
            console.log(aux);
        auxTempo = aux.split(':');
        console.log(auxTempo);
        
        
        aux = tempoTotal[1] + auxTempo[1]; // auxiliar recebe a soma dos minutos sem tratamento
        
        if (aux> 60){
            tempoTotal[0] += auxTempo[0] +1;
            tempoTotal[1] = auxTempo[1]%60;
        }else{
            tempoTotal[0] += auxTempo[0];
            tempoTotal[1] += auxTempo[1];

        }
        $("#cargaHorariaTotal").val(tempoTotal);
        console.log(tempototal);

    });
    
    
    $("#botaoRemover").click(function () {
        qtdLinhas--;
        $("#qtdLinhas-" + qtdLinhas).remove();
    });
});
