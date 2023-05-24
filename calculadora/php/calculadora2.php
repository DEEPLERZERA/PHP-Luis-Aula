<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="../css/style.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="container">
        <div class="formulario3b">
                <?php  
                    require_once "calculadora.php";  //inclui o arquivo calculadora.php
                    $calculadora = new Calc($_GET['nmbNumber1'],$_GET['nmbNumber2']); //cria um objeto da classe Calc
                    print("O valor de a é {$calculadora->getA()}<br>");   //imprime o valor de a
                    print("O valor de B é {$calculadora->getB()}<br>");   //imprime o valor de b
                    $calculadora->somar($calculadora->getA(),$calculadora->getB()); //chama o método somar
                ?>
            </form>
        </div>
    </div>
    
</body>
</html>