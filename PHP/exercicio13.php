<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num1 = "";//instanciando
        $num2= "";
    ?>


    <h1>Exercício 13</h1>
    <form method="POST">
            <label> Temperatura: </label>
            <input type="number" id="celsius" name= "celsius"><br><br>

            <button>Calcular
            <?php
                $celsius = $_POST['celsius'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($celsius == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "A temperatura em Fahrenheit  é: ".celsiuParaFahrenheit($celsius);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>