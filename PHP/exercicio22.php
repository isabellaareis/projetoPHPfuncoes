<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 22</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $texto = "";//instanciando
    ?>


    <h1>Exercício 22</h1>
    <form method="POST">
            <label> texto: </label>
            <input type="string" id="texto" name= "texto"><br><br>

            <button>Calcular
            <?php
                $texto = $_POST['texto'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($texto == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "Número de palavras: ".contadorPalavras($texto);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>