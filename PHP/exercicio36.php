<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 36</title>
</head>
<body>
    <?php
        include 'funcoes.php';
    ?>
        <h1>Exercicio 36</h1>
        <form method="POST">
            <label>Primeiro Numero:</lambel>
            <input type="number" id="saldo"  name="saldo"><br><br>
            <label>Segundo Numero:</lambel>
            <input type="number" id="debito"  name="debito"><br><br>
            <label>Terceiro Numero:</lambel>
            <input type="number" id="credito"  name="credito"><br><br>
            <button>Calcular
            <?php
                $saldo = $_POST['saldo'];
                $debito = $_POST['debito'];
                $credito = $_POST['credito'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                 if($saldo =="" || $debito =="" || $credito ==""){
                    echo "Preencha os campos";
 
                 }else{
                    echo  "".saldo($saldo,$debito,$credito);
                }
                ?>
            </textArea>
        </form>
</body>
 
 