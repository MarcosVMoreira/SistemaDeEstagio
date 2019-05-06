<?php
    if ((isset($_SESSION['nome']) && $_SESSION['nome'] != "")){
        $nomeAluno = $_SESSION['nome'];
        $temp = explode(" ",$nomeAluno);
        $nomeNovo = $temp[0] . " " . $temp[count($temp)-1];
    }
    if ((isset($_SESSION['curso']) && $_SESSION['curso'] != "")){
        $curso = $_SESSION['curso'];
    }
    
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/css/mdb.min.css" rel="stylesheet"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- CSS Próprio -->
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS da Sidebar -->
    <link rel="stylesheet" href="css/sidebar.css">
    <!-- QUnit CSS -->
    <script src="https://code.jquery.com/qunit/qunit-2.9.2.css" integrity="sha256-toepOe5D+ddXgUOGsijnhymZna5bakJ0gwRC/3bK1b0=" crossorigin="anonymous"></script>

    <!-- JS -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Sistema de Estágio</title>
</head>

<body>

    <div class="page-wrapper chiller-theme toggled">

        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>

        <nav id="sidebar" class="sidebar-wrapper">

            <div class="sidebar-content">

                <div class="sidebar-brand">
                    <a href="#">Sistema de Estágio</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>

                <div class="sidebar-header">

                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture">
                    </div>

                    <div class="user-info">
                        <span class="user-name">
                            <?php
                                echo($nomeNovo);
                            ?>
                        </span>
                        <span class="user-role">
                            <?php
                                echo($curso);
                            ?>
                        </span>
                        <!--<span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span> -->
                    </div>
                </div>
                <!-- sidebar-header  -->

                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Geral</span>
                        </li>

                        <li>
                            <a href="home.php">
                                <i class="fa fa-home"></i>
                                <span>Início</span>
                            </a>
                        </li>

                        <li>
                            <a href="formulario.php">
                            <i class="fas fa-file-alt"></i>
                            <span>Formulário</span>
                            </a>
                        </li>

                        <li>
                            <a href="formularioFrequenciaEstagio.php">
                            <i class="fas fa-file-alt"></i>
                            <span>Frequência de Estágio</span>
                            </a>
                        </li>

                        <li>
                            <a href="formularioRelatorioEstagio.php">
                            <i class="fas fa-file-alt"></i>
                            <span>Relatório de Estágio</span>
                            </a>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-file-pdf"></i>
                                <span>Gerar PDF</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="verificarPlanoDeEstagio.php">Plano de Estágio</a>
                                    </li>
                                    <li>
                                        <a href="verificarTermoNaoObrigatorio.php">Termo de Estágio Não Obrigatório</a>
                                    </li>
                                    <li>
                                        <a href="#">Termo de Estágio Obrigatório</a>
                                    </li>
                                    <li>
                                        <a href="#">Frequência do Estágio</a>
                                    </li>
                                    <li>
                                        <a href="#">Relatório do Estágio</a>
                                    </li>
                                    <li>
                                        <a href="#">Declaração de Conclusão</a>
                                    </li>
                                    <li>
                                        <a href="#">Ficha de Avaliação</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="login.php">
                    <i class="fa fa-power-off"></i>

                </a>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
