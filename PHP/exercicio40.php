<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 40</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $raio = "";//instanciando
        $area = "";
    ?>


    <h1>Exercício 40</h1>
    <form method="POST">
            <label> Raio: </label>
            <input type="number" id="raio" name= "raio"><br><br>

            <button>Calcular
            <?php
                $raio = $_POST['raio'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($raio == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "A área da circunferência é: ".circunferencia($raio, $area);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>