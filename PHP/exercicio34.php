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
        $num11 = ""; 
        $num12 = "";
        $num13 = "";
        $num14 = "";
        $num15 = "";
        $num16 = "";
        $num17 = "";
        $num18 = "";
        $num19 = "";
        $num20 = "";

    ?>


    
            <label> Primeiro aluno: </label>
            <input type="number" id="num1" name= "num1"><br><br>

            <label> Segundo aluno: </label>
            <input type="number" id="num2" name= "num2"><br><br>

            <label> Terceiro aluno: </label>
            <input type="number" id="num3" name= "num3"><br><br>

            <label> Quarto aluno: </label>
            <input type="number" id="num4" name= "num4"><br><br>

            <label> Quinto aluno: </label>
            <input type="number" id="num5" name= "num5"><br><br>

            <label> Sexto aluno: </label>
            <input type="number" id="num6" name= "num6"><br><br>

            <label> Sétimo aluno: </label>
            <input type="number" id="num7" name= "num7"><br><br>

            <label> Oitavo aluno: </label>
            <input type="number" id="num8" name= "num8"><br><br>

            <label> Nono aluno: </label>
            <input type="number" id="num9" name= "num9"><br><br>

            <label> Décimo aluno: </label>
            <input type="number" id="num10" name= "num10"><br><br>

            <label> Décimo Primeiro aluno: </label>
            <input type="number" id="num11" name= "num11"><br><br>

            <label> Décimo Segundo aluno: </label>
            <input type="number" id="num12" name= "num12"><br><br>

            <label> Décimo Terceiro aluno: </label>
            <input type="number" id="num13" name= "num13"><br><br>

            <label> Décimo Quarto aluno: </label>
            <input type="number" id="num14" name= "num14"><br><br>

            <label> Quinto aluno: </label>
            <input type="number" id="num15" name= "num15"><br><br>

            <label> Décimo Sexto aluno: </label>
            <input type="number" id="num16" name= "num16"><br><br>

            <label> Décimo Sétimo aluno: </label>
            <input type="number" id="num17" name= "num17"><br><br>

            <label> Décimo Oitavo aluno: </label>
            <input type="number" id="num18" name= "num18"><br><br>

            <label> Décimo Nono aluno: </label>
            <input type="number" id="num19" name= "num19"><br><br>

            <label> Vgésimo aluno: </label>
            <input type="number" id="num20" name= "num20"><br><br>







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
                $num11 = $_POST['num11'];
                $num12 = $_POST['num12'];
                $num13 = $_POST['num13'];
                $num14 = $_POST['num14'];
                $num15 = $_POST['num15'];
                $num16 = $_POST['num16'];
                $num17 = $_POST['num17'];
                $num18 = $_POST['num18'];
                $num19 = $_POST['num19'];
                $num20 = $_POST['num20'];
            ?>
            </button><br><br>

            <textArea rows="10" cols="40" readonly fixed>
                <?php
                    if($num1 == "" || $num2 == "" || $num3 == ""  || $num4 == "" || $num5 == ""  || $num6 == "" || $num7 == ""  || $num8 == "" || $num9 == "" || $num10 == "" || $num11 == "" || $num12 == "" || $num13 == ""  || $num14 == "" || $num15 == ""  || $num16 == "" || $num17 == ""  || $num18 == "" || $num19 == "" || $num20 == ""){
                        echo "Preencha os campos!";
                    }else{
                        echo "A média dos 20 alunos é: ".mediaAlunos($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10, $num11, $num12, $num13, $num14, $num15, $num16, $num17, $num18, $num19, $num20);
                    }
                ?>
            </textArea>
    </form>
</body>
</html>