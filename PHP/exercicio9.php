<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>
<h1>Exercício 09</h1>
    <form method="POST">
    <?php
        include 'funcoes.php';
        $num1 = "";//instanciando
        $num2= "";
    ?>


    
            <label> Primeiro Número: </label>
            <input type="number" id="a" name= "a"><br><br>

            <label> Segundo Número: </label>
            <input type="number" id="b" name= "b"><br><br>

            <label> terceiro Número: </label>
            <input type="number" id="c" name= "c"><br><br>

            <button>Calcular
            <?php
                $a = $_POST['a'];
                $b = $_POST['b'];
                $c = $_POST['c'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($a == "" || $b == "" || $c == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "\n", "O delta é: ".delta($a, $b, $c);
                        echo "\n", "O X1 é: ".x1($a, $b, $c);
                        echo "\n", "O X2 é: ".x2($a, $b, $c);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>