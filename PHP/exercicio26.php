<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 26</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $salario = "";//instanciando
        $valorVendas= "";
    ?>


    <h1>Exercício 26</h1>
    <form method="POST">
            <label> Salário: </label>
            <input type="number" id="salario" name= "salario"><br><br>

            <label> Valor das vendas: </label>
            <input type="number" id="valorVendas" name= "valorVendas"><br><br>

            <button>Calcular
            <?php
                $salario = $_POST['salario'];
                $valorVendas = $_POST['valorVendas'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($salario == "" || $valorVendas == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "O novo salário é: ".salario($salario, $valorVendas);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>