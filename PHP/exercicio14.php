<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
</head>
<body>
<h1>Exercício 14</h1>
    <form method="POST">
    <?php
        include 'funcoes.php';
        $num1 = "";//instanciando
        $num2= "";
    ?>


    
            <label> Primeiro Número: </label>
            <input type="number" id="num1" name= "num1"><br><br>

            <label> Segundo Número: </label>
            <input type="number" id="num2" name= "num2"><br><br>

            <label> terceiro Número: </label>
            <input type="number" id="num3" name= "num3"><br><br>

            <button>Calcular
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($num1 == "" || $num2 == "" || $num3 == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "O maior numero é: ".maior($num1, $num2, $num3);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>