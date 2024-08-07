<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 41</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $tempo = "";//instanciando
        $velocidade = "";
        $distancia =  "";
        $litros = "";
    ?>


    <h1>Exercício 41</h1>
    <form method="POST">
            
            <label> Tempo: </label>
            <input type="number" id="tempo" name= "tempo"><br><br>

            <label> Velocidade Média: </label>
            <input type="number" id="velocidade" name= "velocidade"><br><br>

            <button>Calcular
            <?php
                $tempo = $_POST['tempo'];
                $velocidade = $_POST['velocidade'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($tempo == "" || $velocidade == ""){
                        echo "Preencha os campos!";
                    }else{
                        litros($tempo,$velocidade);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>