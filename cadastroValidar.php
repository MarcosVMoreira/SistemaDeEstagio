<?php
   session_start();
   
   include_once("conexao.php");
   $nome = $_POST["nome"];
   $cpf = $_POST["cpf"];
   $rg = $_POST["rg"];
   $telefone = $_POST["telefone"];
   $dataNascimento = $_POST["dataNascimento"];
   $email = $_POST["email"];
   $cep = $_POST["cep"];
   $endereco = $_POST["endereco"];
   $numero = $_POST["numero"];
   $complemento = $_POST["complemento"];
   $bairro = $_POST["bairro"];
   $estado = $_POST["estado"];
   $cidade = $_POST["cidade"];
   $ra = $_POST["ra"];
   $curso = $_POST["curso"];
   $periodoAno = $_POST["periodoAno"];
   $senha = $_POST["senha"];
   $campus = "Poços de Caldas";
   $tipoEstagio = 1;
   $modalidade = "";
   $matriculado = "";

   $query = "INSERT INTO alunos(nome, cpf, rg, telefoneCelular, dataNascimento, email, cep, endereco, numero, complemento, bairro, uf, cidade, ra, curso, periodoAno, senha, campus, tipoEstagio, modalidade, matriculado) VALUES ('$nome', '$cpf', '$rg', '$telefone', '$dataNascimento', '$email', '$cep', '$endereco', '$numero', '$complemento', '$bairro', '$estado', '$cidade', '$ra', '$curso', '$periodoAno', MD5('$senha'), '$campus', '$tipoEstagio', '$modalidade', '$matriculado')";

   if ($conexao->query($query) === TRUE) {
      header ("Location: home.php");
   } else {
      echo "Error: " . $query . "<br>" . $conexao->error;
   }
      
?>