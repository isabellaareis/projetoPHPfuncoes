<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>
<body>
<h1>Exercício 08</h1>
    <form method="POST">
    <?php
        include 'funcoes.php';
        $num1 = "";//instanciando
        $num2= "";
    ?>


    
            <label> Base: </label>
            <input type="number" id="base" name= "base"><br><br>

            <label> Altura: </label>
            <input type="number" id="altura" name= "altura"><br><br>

            <button>Calcular
            <?php
                $base = $_POST['base'];
                $altura = $_POST['altura'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($base == "" || $altura == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "A área do retângulo é: ".areaRetangulo($base, $altura);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>