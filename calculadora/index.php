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
           <p class = "texto"> Calculadora mágica </p>
           <img  class = "image" src = "./image/mago.png" alt = "mago" class = "img">
            <form>
                <?php
                    for($i=1;$i<=2;$i++) {
                        print("<label for=''>Numero$i</label><br>");
                        print("<input type='number' name='nmbNumber$i' id=''><br>");
                    }
                ?>
                <br><br>
                <button type="submit" class = "button" formaction="./php/soma.php" formmethod="get" formtarget="_blank" formdata="operation=soma">+</button> 
                <button type="submit" class = "button" formaction="./php/subtracao.php" formmethod="get" formtarget="_blank" formdata="operation=subtracao">-</button>
                <button type="submit" class = "button" formaction="./php/multiplicacao.php" formmethod="get" formtarget="_blank" formdata="operation=multiplicacao">*</button>
                <button type="submit" class = "button" formaction="./php/divisao.php" formmethod="get" formtarget="_blank" formdata="operation=divisao">/</button> <br>
                <button type="submit" class = "button" formaction="./php/exponenciacao.php" formmethod="get" formtarget="_blank" formdata="operation=exponenciacao">^</button>
                <button type="submit" class = "button" formaction="./php/raiz.php" formmethod="get" formtarget="_blank" formdata="operation=raiz">√</button> 
            </form>
        </div>
    </div>
    
</body>
</html>