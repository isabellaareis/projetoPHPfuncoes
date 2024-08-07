<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 38</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $altura = "";//instanciando
        $volume = "";
        $raio = ""
    ?>


    <h1>Exercício 38</h1>
    <form method="POST">
            <label> Altura: </label>
            <input type="number" id="altura" name= "altura"><br><br>

            <label> Raio: </label>
            <input type="number" id="raio" name= "raio"><br><br>


            <button>Calcular
            <?php
                $altura = $_POST['altura'];
                $raio = $_POST['raio'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($altura == "" || $raio == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "O volume é: ".volumeLata($altura, $raio, $volume);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>