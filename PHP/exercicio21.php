<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 21</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $palavra = "";//instanciando
    ?>


    <h1>Exercício 21</h1>
    <form method="POST">
            <label> Palavra: </label>
            <input type="string" id="palavra" name= "palavra"><br><br>

            <button>Calcular
            <?php
                $palavra = $_POST['palavra'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($palavra == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "Vogais: ".  contar_vogais($palavra);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>