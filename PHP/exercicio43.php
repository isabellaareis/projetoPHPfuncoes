<lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 43</title>
</head>
<body>
    <?php
        include 'funcoes.php';
         $salario = "";
    ?>
    <h1>Exercício 43</h1>
    <form method="POST">
        <label>Digite o 1º salário: </label>
        <input type= "number" id="salario1" name="salario1"><br><br>
        <label>Digite o 2º salário: </label>
        <input type= "number" id="salario2" name="salario2"><br><br>
        <label>Digite o 3º salário: </label>
        <input type= "number" id="salario3" name="salario3"><br><br>
        <label>Digite o 1º filho: </label>
        <input type= "number" id="filho1" name="filho1"><br><br>
        <label>Digite o 2º filho: </label>
        <input type= "number" id="filho2" name="filho2"><br><br>
        <label>Digite o 3º filho: </label>
        <input type= "number" id="filho3" name="filho3"><br><br>
       
        <button>Calcular
        <?php
             $salario1 =  $_POST['salario1'];
             $salario2 =  $_POST['salario2'];
             $salario3 =  $_POST['salario3'];
             $filho1 =  $_POST['filho1'];
             $filho2 =  $_POST['filho2'];
             $filho3 =  $_POST['filho3'];
       
        ?>
        </button><br><br>
 
        <textArea rows="10" cols="50" readonly fixed>
            <?php
                 if(($salario1== "")&($salario2== "")&($salario3== "")&($filho1== "")&($filho2== "")&($filho3== "")){
                    echo "Preencha o campo!";
                  }else{
                    echo "".prefeitura($salario1,$salario2,$salario3,$filho1,$filho2,$filho3);
                  }
               
            ?>
        </textArea>
    </form>    
</body>
</html>