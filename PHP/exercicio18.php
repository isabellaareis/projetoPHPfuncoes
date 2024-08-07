<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num1 = "";//instanciando
        $num2= "";
    ?>


    <h1>Exercício 18</h1>
    <form method="POST">
            <label> Palavra: </label>
            <input type="string" id="string" name= "string"><br><br>

            <button>Calcular
            <?php
                $string = $_POST['string'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($string == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "A palavra é: ". palavra($string);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>