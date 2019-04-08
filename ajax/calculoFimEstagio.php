<?php
    $dataInicio = $_POST['dataInicioEstagio'];

    $json = file_get_contents('https://api.calendario.com.br/?json=true&token=c2h1dGF2aW9AZ21haWwuY29tJmhhc2g9MTU2MzQ4MTY4&ano=2019&estado=MG&cidade=POCOS_DE_CALDAS');
    $obj = json_decode($json);

    $qtdFeriados = sizeof($obj);

    for($i = 0; $i < $qtdFeriados; $i++) {
        if($obj[$i]->type_code == 1) {
            echo $obj[$i]->name . '<br />';
        }
    }
?>
