<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 23</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $divisor = "";//instanciando
    ?>


    <h1>Exercício 23</h1>
    <form method="POST">
            <label> Número: </label>
            <input type="number" id="divisor" name= "divisor"><br><br>

            <button>Calcular
            <?php
                $divisor = $_POST['divisor'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($divisor == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "Divisores que o numero tem: ".divisores($divisor);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>