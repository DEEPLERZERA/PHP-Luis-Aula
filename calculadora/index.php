<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="./css/style.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="container">
        <div class="formulario3b">
            <form action="./php/calculadora2.php" method="get">
                <?php
                    for($i=1;$i<=2;$i++) {
                        print("<label for=''>Numero$i</label><br>");
                        print("<input type='number' name='nmbNumber$i' id=''><br>");
                    }
                ?>
                <input type="submit" value="calcular">
            </form>
        </div>
    </div>
    
</body>
</html>