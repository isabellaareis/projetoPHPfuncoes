<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 25</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $macas = "";//instanciando
    ?>


    <h1>Exercício 25</h1>
    <form method="POST">
            <label> Quantidade de Maçãs: </label>
            <input type="number" id="macas" name= "macas"><br><br>

            <button>Calcular
            <?php
                $macas = $_POST['macas'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($macas == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "O valor a ser pago é: ".macas($macas);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>