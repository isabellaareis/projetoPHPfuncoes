<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 36</title>
</head>
<body>
    <?php
        include 'funcoes.php';
 
    ?>
    <h1>Exercício 36</h1>
    <form method="POST">
        <label>Digite o 1º: </label>
        <input type= "number" id="num1" name="num1"><br><br>
        <label>Digite o 2º: </label>
        <input type= "number" id="num2" name="num2"><br><br>
        <label>Digite o 3º: </label>
        <input type= "number" id="num3" name="num3"><br><br>
        <label>Digite o 4º: </label>
        <input type= "number" id="num4" name="num4"><br><br>
 
        <button>Calcular
        <?php
            $num1  =  $_POST['num1'];
            $num2 =  $_POST['num2'];
            $num3 =  $_POST['num3'];
            $num4 =  $_POST['num4'];
 
 
        ?>
        </button><br><br>
 
        <textArea rows="10" cols="50" readonly fixed>
            <?php
                 if(($num1 == "") || ($num2 == "") || ($num3 == "")|| ($num4 == "")){
                    echo "Preencha o campo!";
                  }else{
                    echo "". mediaMaior($num1,$num2,$num3,$num4);
                  }
               
            ?>
        </textArea>
    </form>    
</body>
</html>