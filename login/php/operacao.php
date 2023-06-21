<?php
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'login';


    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    if(mysqli_connect_errno()) {
        die('Falha na conexão com o MySQL: ' . mysqli_connect_error());
    }


    $usuarioDigitado = $_GET['txtEmail'];
    $senhaDigitada   = $_GET['txtPass'];

    $sql = "SELECT usuario, senha FROM login";
    $resultado = mysqli_query($conexao, $sql);

    if(!$resultado) {
        die('Erro na consulta: ' . mysqli_connect_error($conexao));
    }

    $usuarioCorreto = false;


    while($linha = mysqli_fetch_assoc($resultado)) {
        if ($linha['usuario'] == $usuarioDigitado && $linha['senha'] == $senhaDigitada) {
            $usuarioCorreto = true;

            break;
        }
    }


    if ($usuarioCorreto) {
        echo 'Olá, seja bem-vindo';
    } else {
        echo 'Usuário ou senha inválidos.';
    }

    mysqli_close($conexao);
?>