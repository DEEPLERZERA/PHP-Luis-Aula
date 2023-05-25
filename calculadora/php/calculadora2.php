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
                    require_once "calculadora.php";
                    $calculadora = new Calc($_GET['nmbNumber1'],$_GET['nmbNumber2']);
                    print("O valor de a é {$calculadora->getA()}<br>");
                    print("O valor de B é {$calculadora->getB()}<br>"); 
                    $calculadora->somar($calculadora->getA(),$calculadora->getB());
                    $calculadora->subtrair($calculadora->getA(),$calculadora->getB());
                    $calculadora->multiplicacao($calculadora->getA(),$calculadora->getB());
                    $calculadora->divisao($calculadora->getA(),$calculadora->getB());
                ?>
            </form>
        </div>
    </div>
    
</body>
</html>