<?php
    session_start();

    $test = true; // Definir como true para rodar os testes do main.js

    if (!((isset($_SESSION['ra']) && $_SESSION['ra'] != "") &&  
	(isset($_SESSION['nome']) && $_SESSION['nome'] != "") && (isset($_SESSION['senha']) && $_SESSION['senha'] != ""))) {
        header("Location: login.php");
	} else {
        include("header.php");
        if ((isset($_SESSION['rg']) && $_SESSION['rg'] != "")){
            $rg = $_SESSION['rg'];
        }
        if ((isset($_SESSION['cpf']) && $_SESSION['cpf'] != "")){
            $cpf = $_SESSION['cpf'];
        }
        if ((isset($_SESSION['nome']) && $_SESSION['nome'] != "")){
            $nomeAluno = $_SESSION['nome'];
            $temp = explode(" ",$nomeAluno);
            $nomeNovo = $temp[0] . " " . $temp[count($temp)-1];
        }
        if ((isset($_SESSION['cidade']) && $_SESSION['cidade'] != "")){
            $cidade = $_SESSION['cidade'];
        }
        if ((isset($_SESSION['uf']) && $_SESSION['uf'] != "")){
            $uf = $_SESSION['uf'];
        }
        if ((isset($_SESSION['cep']) && $_SESSION['cep'] != "")){
            $cep = $_SESSION['cep'];
        }
        if ((isset($_SESSION['endereco']) && $_SESSION['endereco'] != "")){
            $endereco = $_SESSION['endereco'];
        }
        if ((isset($_SESSION['bairro']) && $_SESSION['bairro'] != "")){
            $bairro = $_SESSION['bairro'];
        }
        if ((isset($_SESSION['numero']) && $_SESSION['numero'] != "")){
            $numero = $_SESSION['numero'];
        }
        if ((isset($_SESSION['curso']) && $_SESSION['curso'] != "")){
            $curso = $_SESSION['curso'];
        }
        if ((isset($_SESSION['campus']) && $_SESSION['campus'] != "")){
            $campus = $_SESSION['campus'];
        }
        if ((isset($_SESSION['ra']) && $_SESSION['ra'] != "")){
            $ra = $_SESSION['ra'];
        }
        if ((isset($_SESSION['email']) && $_SESSION['email'] != "")){
            $email = $_SESSION['email'];
        }
        if ((isset($_SESSION['dataNascimento']) && $_SESSION['dataNascimento'] != "")){
            $dataNascimento = $_SESSION['dataNascimento'];
        }
        if ((isset($_SESSION['periodoAno']) && $_SESSION['periodoAno'] != "")){
            $periodoAno = $_SESSION['periodoAno'];
        }
        if (isset($_SESSION['complemento'])){
            if($_SESSION['complemento'] != '') {
                $complemento = $_SESSION['complemento'];
            } 
        }
        else{
            $complemento ="";
        }

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 mt-3">
            <h2 id="nome"><?php echo($nomeNovo . " " . $ra); ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h5 class="mt-4">Dados Gerais</h5>
            <table class="table table-hover table-striped">
                <tbody>
                    <tr>
                        <th class="alinhar">Nome Completo</th>
                        <td><?php echo($nomeAluno) ?></td>
                        <th class="alinhar">Data de Nascimento</th>
                        <td><?php echo($dataNascimento)?></td>
                    </tr>
                    <tr>
                        <th class="alinhar">CPF</th>
                        <td><?php echo($cpf)?> </td>
                        <th class="alinhar">RG</th>
                        <td><?php echo($rg) ?></td>
                    </tr>
                    <tr>
                        <th class="alinhar">Email</th>
                        <td><?php echo($email); ?> </td>
                        <th class="alinhar">Matrícula (R.A.)</th>
                        <td><?php echo($ra) ?> </td>
                    </tr>
                    <tr>
                        <th class="alinhar">Curso</th>
                        <td><?php echo($curso) ?> </td>
                        <th class="alinhar">Módulo/Ano</th>
                        <td><?php echo($periodoAno) ?></td>
                    </tr>
                    <tr>
                        <th class="alinhar">CEP</th>
                        <td><?php echo($cep) ?></td>
                        <th class="alinhar">Bairro</th>
                        <td><?php echo($bairro) ?></td>
                    </tr>
                    <tr>
                        <th class="alinhar">Endereço</th>
                        <td><?php echo($endereco . ", " . $numero) ?></td>
                        <th class="alinhar">Complemento</th>
                        <td><?php echo($complemento) ?></td>
                    </tr>
                    <tr>
                        <th class="alinhar">Estado</th>
                        <td><?php echo($uf) ?></td>
                        <th class="alinhar">Cidade</th>
                        <td><?php echo($cidade) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
    }
    if($test) {
        echo '<div id="qunit"></div>';
        echo '<div id="qunit-fixture"></div>';
        echo '<script type="text/javascript" src="js/teste-main.js"></script>';
        echo '<script type="text/javascript" src="js/teste-cadastro.js"></script>';
    }

    include("footer.html");
?>
