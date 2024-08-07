<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20</title>
</head>
<body>
<h1>Exercício 20</h1>
    <form method="POST">
    <?php
        include 'funcoes.php';
        $num1 = "";//instanciando
        $num2= "";
        $num3 = "";
        $num4 = "";
        $num5= "";
    ?>


    
            <label> Primeiro Número: </label>
            <input type="number" id="num1" name= "num1"><br><br>

            <label> Segundo Número: </label>
            <input type="number" id="num2" name= "num2"><br><br>

            <label> Terceiro Número: </label>
            <input type="number" id="num3" name= "num3"><br><br>

            <label> Quarto Número: </label>
            <input type="number" id="num4" name= "num4"><br><br>

            <label> Quinto Número: </label>
            <input type="number" id="num5" name= "num5"><br><br>



            <button>Calcular
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3= $_POST['num3'];
                $num4 = $_POST['num4'];
                $num5 = $_POST['num5'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($num1 == "" || $num2 == "" || $num3 == ""  || $num4 == "" || $num5 == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "A média dos numeros é: ".mediaCincoNumeros($num1, $num2, $num3, $num4, $num5);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>