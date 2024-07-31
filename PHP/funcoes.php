<?php
    //instanciar
    $num1 = 0;//variaveis globais (código todo ultiliza)
    $num2 = 0;//variaveis globais (código todo ultiliza)

    function somar ($num1, $num2){
       return (int)$num1 + (int)$num2;
    }//fim do somar

    function subtrair ($num1, $num2){
        return $num1 - $num2;
    }//fim do subtrair

    function multiplicar ($num1, $num2){
        return $num1 * $num2;
    }// fim do multiplicar

    function dividir($num1, $num2){
        if($num1 == 0){
            return "Impossível divir por 0";
        }else{
            return $num1 / $num2;
        }
    }//fim do dividir

    function potencia( $num1, $num2){
        if($num2 <0 ){
            return "Impossível calcular a potencia de um expoente negativo";
        }else{
            return pow($num1, $num2);
        }
    }//fim da potência

    function raiz( $num1){
        if($num1 <= 0){
            return "Impossível calcular a raiz de um número negativo";
        }else{
            return sqrt($num1);
        }
    }//fim da raiz

    function tabuada($num1){
        $i = 0;
        $resultado = "";
        for($i; $i<=10; $i++){
            $resultado .= "<br>".$num1." * ".$i." = ".($num1*$i);
        }//fim do for
        return $resultado;
    }//fim da tabuada

    function areaRetangulo($base, $altura){
        if(($base<= 0) || ($altura<= 0)){
            return "Impossível calcular a área";
        }else{
            return $base * $altura;
        }
    }

    function delta($a, $b, $c){
        $delt = pow($b, 2) - 4 * $a * $c;
        if($delt < 0){
            return -1;
        }else{
            return $delt;
        }
    }//fim do delta

    function x1($a, $b, $c){
        $d = delta($a,$b,$c);
        if($d == -1){
            "Impossível calcular X1, delta negativo";
        }else{
            return (-$b + sqrt($d))/(2*$a);
        }
    }//fim do x1

    function x2($a, $b, $c){
         $d = delta($a,$b,$c);
        if($d == -1){
            "Impossível calcular X2, delta negativo";
        }else{
            return (-$b - sqrt($d))/(2*$a);
        }
    }//fim do x2

    function parImpar($num){
        if($num % 2 == 0){
            return "Par";
        }else{
            return "Ìmpar";
        }
    }//fim do par ou ímpar

    function maiorIdade($idade){
        if($idade < 18){
            return "Menor de idade";
        }else{
            return "Maior de idade";
        }
    }//fim do maiorIdade

    function dobro($num){
        return $num * 2;
    }//fim do dobro

    function celsiuParaFahrenheit($celsius){
        return ($celsius * 1.8) + 32;
    }//fim da temperatura

    function maior($num1, $num2, $num3){
        if(($num1 > $num2) && ($num1 > $num3)){
            return $num1;
        }else if(($num2 > $num1) && ($num2 > $num3)){
            return $num2;
        }else{
            return $num3;
        }
    }//fim do maior

    function buscandoPositivoNegativoOuZero($num){
        if($num < 0){
            return "negativo";
        }else if ($num > 0){
            return "positivo";
        }else{
            return "zero";
        }
    }//fim do bsucando

    function somaTodosOsNumeros($num){
        $i = 1;
        $soma = 0;
        for($i; $i <= $num; $i ++){// i++ é a mesma coisa que i + 1
            $soma += $i;
        }
        return $soma;
    }//fim do soma

    function numeroPrimo($num){
        if($num <= 1){
            return "Não é primo";    
        }
        for($i = 2; $i <= sqrt($num); $i++){
            if($num % $i == 0){
                return "Não é primo";
            }
        }
        return $num;
    }//fim numero primo

    function palavra($string){
        if(strrev($string) == $string){
            return " é um palindromo";
        }else{
            return "não é um palindromo";
        }
    }//fim palindromo

    function fatorial($num){
        $fatorial = 1;
        for ($i = 1; $i <= $num; $i++){
            $fatorial = $fatorial * $i;
        }
        return $fatorial;
    }//fim do fatorial

    function pares($num){//exercicio13
        $msg = "";
        if($num < 0){
            return "O numero não pode se calculado";
        }
        for ($i = 1; $i <= $num; $i++) {
            if ($i % 2 == 0){
                $msg.="<br>".$i;
            }
        }
        return $msg;
    }//fim do pares

    function mediaCincoNumeros($num1, $num2, $num3, $num4, $num5){//17
        $soma = $num1 + $num2 + $num3 + $num4 + $num5;
        $media = $soma / 5;
    }//fim media dos cinco numeros

    function contar_vogais($palavra) {//exercicio14
        $vogais = 'aeiouAEIOU';// Definindo as vogais
        $contador = 0;
        for ($i = 0; $i < strlen($palavra); $i++) { // Iterando sobre cada letra da palavra
            if (strpos($vogais, $palavra[$i]) !== false) {
                $contador++;
            }
        }
        return $contador;
    }//fim contar vogais

    function contadorPalavras($texto){//19
        $numero_palavras = str_word_count($texto);
        return $numero_palavras;
    }

    function divisores($divisor){//18
        for($i = 1, $total = 0; $i < $divisor; $i++){
            if ($divisor % $i == 0){
                $total++;
            }
        }
        return $total;
    }

    function idadeEmDias($anos, $mes, $dias){//exercicio 11
        if((($anos < 0) || ($mes < 0) || ($dias < 0))){
            return "Não aceitamos valores negativos.";
        }else{
         $idade = ($anos * 365) + ($mes * 30) + $dias;
         return $idade;  
        }
    }//fim idade

    function macas($macas){//exercicio 12
        if($macas < 12){
            $valor = $macas * 1.30;
        }else{
            $valor = $macas * 1;
        }   
        return $valor;
    }//fim maçãs

    function salario($salario, $valorVendas){//exercicio 14
        if(($salario < 0) || ($valorVendas < 0)){
            return "informe um valor positivo.";
        }else{
            if($valorVendas <= 1500){
                $salario2 = ($valorVendas * 0.03) + $salario;
            }else{
                $salario2 = (($valorVendas - 1500)  * 0.05) + $salario;
            }
        }
        return $salario2;
    }//fim salario

    function numeros($num){//17
        if($num < 0){
            return "Erro. Informe um valor positivo.";
        }else{
            for($i = 1; $i <= $num; $i++){
                echo $i . "<br>";
            }
        }
    }


    function data($dia,$mes,$ano){//exercicio16
        if(checkdate($dia,$mes,$ano)){
            return " Válida";
        }else{
            return " Inválida";
        }  
    }

    function mostrarPrimos($num){//exercicio15
        $numPrimos = "";
        $i = 1;
        for($i; $i <= $num; $i++){
            if(numeroPrimo($i) != "Não é primo"){
                $numPrimos .= "<br>".$i;
            }
        }
        return $numPrimos;
    }

    function saldo($conta,$saldo,$debito,$credito){//15
        if(($debito < 0) || ($credito < 0)){
            return "informe um valor positivo!!";
        }else{
           if(($atual = $saldo - $debito + $credito) == ($atual > 0)){
            return "O saldo da conta é $saldo,sendo positivo";
        }else{
            return "O saldo da conta é $saldo,sendo negativo";
        }
        }
    }

    function negativos($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10){//18
        $negativo = 0;
        if($num1 < 0){
            $negativo++;
        }

        if($num2 < 0){
            $negativo++;
        }

        if($num3 < 0){
            $negativo++;
        }

        if($num4 < 0){
            $negativo++;
        }

        if($num5 < 0){
            $negativo++;
        }

        if($num6 < 0){
            $negativo++;
        }

        if($num7 < 0){
            $negativo++;
        }

        if($num8 < 0){
            $negativo++;
        }

        if($num9 < 0){
            $negativo++;
        }

        if($num10 < 0){
            $negativo++;
        }
        return $negativo;
    }

    function somaNumerosMenor($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10){//19
        $soma = 0;
        if($num1 <= 40){
            $soma = $soma + $num1;
        }

        if($num2 <= 40){
            $soma = $soma + $num2;
        }

        if($num3 <=  40){
            $soma = $soma + $num3;
        }

        if($num4 <= 40){
            $soma = $soma + $num4;
        }

        if($num5 <= 40){
            $soma = $soma + $num5;
        }

        if($num6 <= 40){
            $soma = $soma + $num6;
        }

        if($num7 <= 40){
            $soma = $soma + $num7;
        }

        if($num8 <= 40){
            $soma = $soma + $num8;
        }

        if($num9 <= 40){
            $soma = $soma + $num9;
        }

        if($num10 <= 40){
            $soma = $soma + $num10;
        }
        return $soma;
    }

    function mediaArtmetica(){//20
        $soma = 0;
        $contagem = 0;
        for($i = 15; $i <= 100; $i++){
            $soma += $i;
            $contagem++;
        }

        $media = $soma / $contagem;
        return $media;
    }

    function fibonacci($n){
        $resu = "";
        $a = 0;
        $b = 1;
        $c = 1;
        for ($i = 1; $i < $n ; $i++) {
            $c = $a + $b;
            $a = $b;
            $b = $c;
            $resu .= "<br>".$c;
        }
        return $resu;
    }

    function mediaAlunos()

    //reultados
    echo "<br>A soma dos números é: ".somar(5, 8);
    echo "<br>A subtração dos números é: ".subtrair(9, 15);
    echo "<br>A multiplicação dos números é: ".multiplicar(10, 8);
    echo "<br>A divisão dos números é: ".dividir(3, 1);
    echo "<br>A potência dos números é: ".potencia(3, 2);
    echo "<br>A raiz do número é: ".raiz(64);
    echo "<br>A tabuada do número informado é: ".tabuada(8);
    echo "<br>A área do retângulo é: ".areaRetangulo(5, 6);
    echo "<br>O X1 é: ".x1(-8,5,9);
    echo "<br>O X2 é: ".x2(-8,5,9);
    echo "<br>O número informado é: ".parImpar(28);
    echo "<br>Você é: ".maiorIdade(12);
    echo "<br>O dobro do número é: ".dobro(12);
    echo "<br>A temperatura em Fahrenheit é: ".celsiuParaFahrenheit(25);
    echo "<br>O número maior é: ".maior(0, 1, 9);
    echo "<br>O número é: ".buscandoPositivoNegativoOuZero(0);
    echo "<br>A soma dos números é: ".somaTodosOsNumeros(10);
    echo "<br>O número é: ".numeroPrimo(4);
    echo "<br>A palvra é: ".palavra("hoje");
    echo "<br>O fatorial é: ".fatorial(4);
    echo "<br>A média é: ".mediaCincoNumeros(10, 3, 6, 9, 8);
    echo "<br>A quantidade de vogais que essa palavra tem é: ".contar_vogais("paralelepipedo");
    echo "<br> a quantidade de palavras é: ".contadorPalavras("bom dia");
    echo "<br>Os divisores do número são: ".divisores(20);
    echo "<br>A idade em dias é: ".idadeEmDias(1, 2, 1);
    echo "<br>O valor é: ".macas(40);
    echo "<br>O novo salario é: ".salario(1000, 2000);
    echo "<br>A data é: ".data(11, -4, 2001);
    echo "<br>Números primos: ".mostrarPrimos(100);
    echo "<br>O saldo atual é: ".saldo(8, 100, 9, 8)."<BR>";
    echo "<br>".numeros(23)."<BR>";
    echo "<br>numeros negativos: ".negativos(1, -9, 3, 4, 5, -9, 7, -9, -6, -9);
    echo "<br>a soma dos numeros menores que 40 é: ".somaNumerosMenor(80, 90, 60, 90, 90, 90, 90, 20, 20, 20);
    echo "<br>a meida dos numeros e 15 a 100 é: ".mediaArtmetica();
    echo "<br>Sequencia de fibonacci".fibonacci(5)."<BR>";
    


//strlen("") tamanho de um texto





?>