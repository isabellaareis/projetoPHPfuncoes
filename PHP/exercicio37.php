<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 37</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $salario = "";//instanciando
        $reajuste = "";
    ?>


    <h1>Exercício 37</h1>
    <form method="POST">
            <label> Salário: </label>
            <input type="number" id="salario" name= "salario"><br><br>

            <button>Calcular
            <?php
                $salario = $_POST['salario'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($salario == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "O reajuste é: ".reajusteSalario($salario, $reajuste);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>