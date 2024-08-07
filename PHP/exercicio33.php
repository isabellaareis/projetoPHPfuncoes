<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 33</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $n = "";//instanciando
    ?>


    <h1>Exercício 33</h1>
    <form method="POST">
            <label> Número: </label>
            <input type="number" id="n" name= "n"><br><br>

            <button>Calcular
            <?php
                $n = $_POST['n'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($n == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "Sequencia de fibonacci".fibonacci($n);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>