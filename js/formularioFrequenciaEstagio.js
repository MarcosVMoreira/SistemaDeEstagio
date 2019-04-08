var qtdLinhas=0;
var tempoTotal=0;
$(document).ready(function(){
    $("#botaoAdicionar").click(function () {
        var stringlinha = $("<div class=\"form-row\" id=\"qtdLinhas-"+qtdLinhas+"\">"+
        "<div class=\"col-sm-12 col-md-3\">"+
            "<div class=\"form-group\">"+
                "<label for=\"inputData\">Data</label>"+
                "<input type=\"date\" class=\"form-control\" name=\"inputData"+qtdLinhas+"\" id=\"inputData\" required>"+
            "</div>"+
        "</div>"+
        "<div class=\"col-sm-12 col-md-2\">"+
            "<div class=\"form-group\">"+
                "<label for=\"inputCargaHoraria\">Carga Horária</label>"+
                "<input type=\"time\" class=\"form-control\" name=\"inputCargaHoraria"+qtdLinhas+"\" id=\"inputCargaHoraria"+qtdLinhas+"\" required>"+
            "</div>"+
        "</div>"+
        "<div class=\"col-sm-12 col-md-3\">"+
            "<div class=\"form-group\">"+
                "<label for=\"inputSetor\">Setor</label>"+
                "<input type=\"text\" class=\"form-control\" name=\"inputSetor"+qtdLinhas+"\" id=\"inputSetor\" required>"+
            "</div>"+
        "</div>"+
        "<div class=\"col-sm-12 col-md-4\">"+
            "<div class=\"form-group\">"+
                "<label for=\"inputAtividade\">Atividade Desenvolvida</label>"+
                "<input type=\"text\" class=\"form-control\" name=\"inputAtividade"+qtdLinhas+"\" id=\"inputAtividade\" required>"+
           "</div>"+
        "</div>"+
    "</div>");
    var empty=false;
    $("input").each(function(){
        if($(this).val()==""){
            empty=true;
            return true;
        }
    });
    if(empty==false){
        for(var i=0;i<qtdLinhas;i++){
            tempoTotal+=$("#inputCargaHoraria"+qtdLinhas).val();
        }
        $("#linhaEstagio").append(stringlinha);
        qtdLinhas++;
    }
    });
    $("#botaoRemover").click(function(){
        qtdLinhas--;
        $("#qtdLinhas-"+qtdLinhas).remove();
    });
});