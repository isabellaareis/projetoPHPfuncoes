<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num1 = "";//instanciando
        $num2= "";
    ?>


    <h1>Exercício 19</h1>
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
                        echo "O fatorial é: ". fatorial($num);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>