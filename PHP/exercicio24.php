<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 24</title>
</head>
<body>
<h1>Exercício 24</h1>
    <form method="POST">
    <?php
        include 'funcoes.php';
        $ano = "";//instanciando
        $mes= "";
        $dia = "";
    ?>


    
            <label> Ano: </label>
            <input type="number" id="ano" name= "ano"><br><br>

            <label> Mês: </label>
            <input type="number" id="mes" name= "mes"><br><br>

            <label> Dia: </label>
            <input type="number" id="dia" name= "dia"><br><br>

           
            <button>Calcular
            <?php
                $ano = $_POST['ano'];
                $mes = $_POST['mes'];
                $dia= $_POST['dia'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($ano == "" || $mes == "" || $dia == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "A idade em dias é: ".idadeEmDias($ano, $mes, $dia);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>