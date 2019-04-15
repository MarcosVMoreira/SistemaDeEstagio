<?php
    $dataInicio = $_POST['dataInicioEstagio']; // Data de início do estágio, no formato yyyy-MM-dd
    $diasDeTrabalho = $_POST['diasDeTrabalho']; // String com os dias da semana que irá trabalhar, exemplo: "1,3" (segunda e quarta)
    $horasDeTrabalhoPorDia = $_POST['horasPorDia']; // String com a quantidade de horas que irá trabalhar em cada dia, exemplo: "8, 7.5" (para o exemplo de dias acima)
    $cargaHorariaTotal = $_POST['cargaHorariaTotal']; // Em horas

    $dataArray = explode("-", $dataInicio);
    $ano = $dataArray[0];
    $mes = $dataArray[1];
    $dia = $dataArray[2];

    $diasDeTrabalhoArray = explode(",", $diasDeTrabalho);
    $horasDeTrabalhoPorDiaArray = explode(",", $horasDeTrabalhoPorDia);

    function qtdDiasMes($mes, $ano) {
        switch($mes) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                return 31;
            case 2:
                $bissexto = date('L', mktime(0, 0, 0, 1, 1, $ano));
                return $bissexto ? 29 : 28;
            case 4:
            case 6:
            case 9:
            case 11:
                return 30;
        }
    }

    function ehDiaDeTrabalho($data, $diasDeTrabalhoArray) {
        $numeroDiaSemana = date('N', strtotime($data));
        $resultadoBusca = array_search($numeroDiaSemana, $diasDeTrabalhoArray);
        if($resultadoBusca === 0 || $resultadoBusca === 1 || $resultadoBusca === 2 || $resultadoBusca === 3 || $resultadoBusca === 4 || $resultadoBusca === 5 || $resultadoBusca === 6) {
            return true;
        }
        return false;
    }

    function ehFeriado($data) {
        
        $dataArray = explode("-", $data);
        $data = str_pad($dataArray[2], 2, "0", STR_PAD_LEFT) . "/" . str_pad($dataArray[1], 2, "0", STR_PAD_LEFT) . "/" . $dataArray[0];
        
        $json = file_get_contents('https://api.calendario.com.br/?json=true&token=c2h1dGF2aW9AZ21haWwuY29tJmhhc2g9MTU2MzQ4MTY4&ano=2019&estado=MG&cidade=POCOS_DE_CALDAS');
        $obj = json_decode($json);

        $qtdFeriados = sizeof($obj);

        for($i = 0; $i < $qtdFeriados; $i++) {
            if($obj[$i]->type_code == 1) {
                if(strcmp($obj[$i]->date, $data) == 0) {
                    return true;
                }
            }
        }
        
        return false;
    }

    $totalDeHoras = 0;
    while(true) {

        $strData = $ano . "-" . str_pad($mes, 2, "0", STR_PAD_LEFT) . "-" . str_pad($dia, 2, "0", STR_PAD_LEFT);
        
        //echo "Verificando o dia: " . $strData . " - " . date('N', strtotime($strData)) . "<br />";

        if(ehDiaDeTrabalho($strData, $diasDeTrabalhoArray) && !ehFeriado($strData)) {
            //echo $strData . " é dia de trabalho<br />";
            $posicaoDiaNoArray = array_search(date('N', strtotime($strData)), $diasDeTrabalhoArray);
            $totalDeHoras += $horasDeTrabalhoPorDiaArray[$posicaoDiaNoArray];
        }

        if($totalDeHoras >= $cargaHorariaTotal) {
            break;
        } else {
            if($dia == qtdDiasMes($mes, $ano)) {
                $dia = 1;
                if($mes != 12) {
                    $mes++;
                } else {
                    $mes = 1;
                    $ano++;
                }
            } else {
                $dia++;
            }
        }
        //echo "<br />";
    }
    
    //echo "<br />Horas necessárias: " . $cargaHorariaTotal . "<br />";
    //echo "Horas trabalhadas: " . $totalDeHoras . "<br />";
    //echo "Fim do estágio: " . $dia . "/" . $mes . "/" . $ano;
    echo $ano . "-" . str_pad($mes, 2, "0", STR_PAD_LEFT) . "-" . str_pad($dia, 2, "0", STR_PAD_LEFT);
?>
