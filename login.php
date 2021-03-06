<?php
    session_start();
?>
<?php
    unset($_SESSION['ra'],
    $_SESSION['nome'],
    $_SESSION['senha']);

?>
<?php
$ra = (isset($_COOKIE['CookieRa'])) ? base64_decode($_COOKIE['CookieRa']) : '';
$senha = (isset($_COOKIE['CookieSenha'])) ? base64_decode($_COOKIE['CookieSenha']) : '';
$lembrete = (isset($_COOKIE['CookieLembrete'])) ? base64_decode($_COOKIE['CookieLembrete']) : '';
$checked = ($lembrete == 'remember-me') ? 'checked' : '';
?>
<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Site</title>

    <link href="css/signin.css" rel="stylesheet">

</head>

<body class="text-center">
    <form action="loginValidar.php" method="POST" id="registration-form" class="form-signin" onsubmit="">
        <img class="mb-4" src="img/logo.jpg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Faça seu login</h1>
        <label for="inputRa" class="sr-only">RA</label>
        <input type="text" name="ra" id="inputRa" class="form-control" placeholder="RA" value="<?=$ra?>" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" value="<?=$senha?>" required>
        <p class="text-center text-danger">
            <?php
                    if (isset($_SESSION['loginErro'])) {
                        echo $_SESSION['loginErro'];
                        unset ($_SESSION['loginErro']);
                    }  
                ?>
        </p>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="lembrete"value="remember-me" <?=$checked?>> Lembrar-me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        <small class="mt-5 mb-3 ">Não possui uma conta? <a href="cadastro.php">Registre-se</a></small>
        <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js\bootstrap.bundle.js"></script>

</body>

</html>
