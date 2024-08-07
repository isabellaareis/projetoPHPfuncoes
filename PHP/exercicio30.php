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
        $num6 = "";
        $num7= "";
        $num8 = "";
        $num9 = "";
        $num10= "";

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

            <label> Sexto Número: </label>
            <input type="number" id="num6" name= "num6"><br><br>

            <label> Sétimo Número: </label>
            <input type="number" id="num7" name= "num7"><br><br>

            <label> Oitavo Número: </label>
            <input type="number" id="num8" name= "num8"><br><br>

            <label> Nono Número: </label>
            <input type="number" id="num9" name= "num9"><br><br>

            <label> Décimo Número: </label>
            <input type="number" id="num10" name= "num10"><br><br>





            <button>Calcular
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3= $_POST['num3'];
                $num4 = $_POST['num4'];
                $num5 = $_POST['num5'];
                $num6 = $_POST['num6'];
                $num7 = $_POST['num7'];
                $num8= $_POST['num8'];
                $num9 = $_POST['num9'];
                $num10 = $_POST['num10'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($num1 == "" || $num2 == "" || $num3 == ""  || $num4 == "" || $num5 == ""  || $num6 == "" || $num7 == ""  || $num8 == "" || $num9 == "" || $num10 == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "Quantidade de números negativos: ".negativos($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>