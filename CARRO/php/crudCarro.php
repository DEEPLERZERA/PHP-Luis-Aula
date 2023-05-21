<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">   
    <title>PDO -> CARRO</title>
</head>
<body>
    <div class = "container">
        <div class = "formularioB">
        <?php
            require_once "./Carro.php"; //Importando classe
            $carroAtual = new Carro();  //Instanciando classe
            $nome = $_GET['txtNome'];   
            $carroAtual->setName($nome);  //Setando nome
            $carroAtual->status();        //Mostrando nome
            $carroAtual->inserirChave();  //Inserindo chave
            $carroAtual->ligarCarro();    //Ligando carro 
            $carroAtual->retirarChave();  //Retirando chave
            $carroAtual->desligarCarro(); //Desligando carro
        ?>
        </div>
    </div>
</body>
</html>



