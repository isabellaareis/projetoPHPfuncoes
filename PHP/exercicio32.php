<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 29</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num = "";//instanciando
    ?>


    <h1>Exercício 29</h1>
    <form method="POST">
            <label> Número: </label>
            <input type="number" id="num" name= "num"><br><br>

            <button>Calcular
            <?php
                $num = $_POST['num'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($num == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "Os númeors pares são: ".pares($num);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>