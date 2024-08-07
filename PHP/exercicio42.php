<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 42</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $ht = "";//instanciando
        $vh = "";
        $pd =  "";
        $sb = "";
        $sl = "";
        $td = "";
    ?>


    <h1>Exercício 42</h1>
    <form method="POST">
            
            <label> Horas Trabalhadas no Mês: </label>
            <input type="number" id="ht" name= "ht"><br><br>

            <label> Valor Hora Trabalhada: </label>
            <input type="number" id="vh" name= "vh"><br><br>

            <label> Percentual de Desconto: </label>
            <input type="number" id="pd" name= "pd"><br><br>

            <button>Calcular
            <?php
                $ht = $_POST['ht'];
                $vh = $_POST['vh'];
                $pd = $_POST['pd'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($ht == "" || $vh == ""|| $pd == ""){
                        echo "Preencha os campos!";
                    }else{
                        salarioBruto($ht,$vh,$pd);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>