<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/exercicio1', function (Request $request) {
    $nome = $request->input('nome');
    return $nome;
});

Route::get('/exercicio2', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    return 'Meu nome é ' . $nome . ', tenho ' . $idade . ' anos de idade.';
});

Route::get('/exercicio3', function (Request $request) {
    $nome = $request->input('nome');
    $nascimento = $request->input('nascimento');
    $cidade = $request->input('cidade');
    return 'Meu nome é ' . $nome . ' nasci no ano de ' . $nascimento . ' na cidade de ' . $cidade;
});

Route::get('/exercicio4', function (Request $request) {
    $primeiroNumero = $request->input("primeiroN");
    $segundoNumero = $request->input('segundoN');
    $resultado = $primeiroNumero + $segundoNumero;
    return 'O resultado da soma dos números é: ' . $primeiroNumero . '+' . $segundoNumero . '=' . $resultado;
});

Route::get('/exercicio5', function (Request $request) {
    $primeiroNumero = $request->input('primeiroN');
    $segundoNumero = $request->input('segundoN');
    $terceiroNumero = $request->input('terceiroN');
    $resultado = $primeiroNumero - $segundoNumero - $terceiroNumero;
    return 'O resultado da subtração é: ' . $primeiroNumero . '-' . $segundoNumero . '-' . $terceiroNumero . '=' . $resultado;
});

Route::get('/exercicio6', function (Request $request) {
    $primeiroNumero = $request->input('primeiroN');
    $segundoNumero = $request->input('segundoN');
    $resultado = $segundoNumero / $primeiroNumero;
    return 'O resultado da divisão é: ' . $segundoNumero . '/' . $primeiroNumero . '=' . $resultado;
});

Route::get('/exercicio7', function (Request $request) {
    $primeiroNumero = $request->input('primeiroN');
    $segundoNumero = $request->input('segundoN');
    $resultado = $primeiroNumero / $segundoNumero;
    return $primeiroNumero . "/" . $segundoNumero . '=' . $resultado;
});

Route::get('/exercicio8', function (Request $request) {
    $primeiroNumero = $request->input('primeiroN');
    $segundoNumero = $request->input('segundoN');
    $resultado = $primeiroNumero * $segundoNumero;
    return $primeiroNumero . 'x' . $segundoNumero . '=' . $resultado;
});

Route::get('/exercicio9', function (Request $request) {
    $primeiraNota = $request->input('primeiraN');
    $segundaNota = $request->input('segundaN');
    $terceiraNota = $request->input('terceiraN');
    $quartaNota = $request->input('quartaN');
    $quintaNota = $request->input('quintaN');
    $resultado = ($primeiraNota + $segundaNota + $terceiraNota + $quartaNota + $quintaNota) / 5;
    return $primeiraNota . "+" . $segundaNota . '+' . $terceiraNota . '+' . $quartaNota . '+' . $quintaNota . '=' . $resultado;
});

Route::get('/exercicio10', function (Request $request) {
    $numero = $request->input('n');
    $resultado = $numero * 2;
    return 'O dobro do número ' . $numero . ' é igual a: ' . $resultado;
});

Route::get('/exercicio11', function (Request $request) {
    $base = $request->input('base');
    $altura = $request->input('altura');
    $resultado = $base * $altura;
    return $resultado;
});

Route::get('/exercicio12', function (Request $request) {
    $valorOriginal = $request->input('valorTotal');
    $desconto = $request->input('desconto');
    $porcentagem = $valorOriginal / 100;
    $resultado = $valorOriginal - ($desconto * $porcentagem);
    return ' o valor do produto é ' . $valorOriginal . ' com o desconto de ' . $desconto . "%" . ' o valor atual é de ' . $resultado;
});

Route::get('/exercicio13', function (Request $request) {
    $salarioantigo = $request->input('salarioantigo');
    $aumento = $request->input('aumento');
    $porcentagem = $salarioantigo / 100;
    $resultado  = $salarioantigo + ($porcentagem * $aumento);
    return $resultado;
});

Route::get('/exercicio14', function (Request $request) {
    $valorinicial = $request->input('valor');
    $resultado = $valorinicial / 10;
    return $resultado;
});

Route::get('/exercicio15', function (Request $request) {
    $preçoproduto = $request->input('preçoproduto');
    $comissão = $request->input('comissão');
    $porcentagem = $preçoproduto / 100;
    $resultado  = $preçoproduto + ($porcentagem * $comissão);
    return $resultado;
});

Route::get('/exercicio16', function (request $request) {
    $dias = $request->input('dias');
    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    $resultado = "dias: " . $dias . " horas: " . $horas . " minutos: " . $minutos . " segundos: " . $segundos;
    return $resultado;
});

Route::get('/exercicio17', function (request $request) {
    $precoProduto = $request->input('Produto');
    $quantidade = $request->input('quantidade');
    $resultado = "valor total: " . $precoProduto * $quantidade;
    return $resultado;
});





Route::get('exercicio3', function (Request $request) {
    $idade = $request->input('idade');
    if ($idade < 18) {
        return "menor de idade";
    } else {
        return "maior de idade";
    }
});

Route::get('exercicio4', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 2 == 0) {
        return 'par';
    } else {
        return 'impar';
    }
});

Route::get('exercicio1', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 10) {
        return 'Número maior que 10';
    } else {
        return 'Número menor que 10';
    }
});

Route::get('exercicio7', function (Request $request) {
    $temperatura = $request->input('temperatura');
    if ($temperatura > 30) {
        return 'Está quente!';
    }
});

Route::get('exercicio2', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 0) {
        return 'Esse número é positivo';
    } else if ($numero < 0) {
        return 'Esse número é negativo';
    } else {
        return 'Esse número é igual a 0';
    }
});

Route::get('exercicio5', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if ($numero1 > $numero2) {
        return 'O numero maior é ' . $numero1;
    } else {
        return 'O número maior é ' . $numero2;
    }
});

Route::get('exercicio6', function (Request $request){
    $numero = $request->input('numero');
    if ($numero % 9 ==0)
    {
        return 'É divisivel';
    } else {
        return 'Não é divisivel';
    }
});
    
Route::get('exercicio8', function (Request $request){
    $numero = $request->input('numero');
    if ($numero % 7 ==0)
    {
        return 'É multiplo de 7';
    } else {
        return 'Não é multiplo de 7';
    }
});

Route::get('exercicio9', function (Request $request) {
    $idade = $request->input('idade');
    if ($idade < 12) {
        return "Você é uma criança!";
    } else {
        return 'Você não é uma criança!';
    }
});

Route::get('exercicio10', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 3 ==0) {
        return 'positivo e ímpar';
    } 
});

Route::get('exercicio11', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 100) {
        return 'Esse número é maior que 100';
    } else if ($numero < 100) {
        return 'Esse número é menor que 100';
    } else {
        return 'Esse número é igual a 100';
    }
});

Route::get('exercicio12', function (Request $request){
    $numero = $request->input('numero');
    if ($numero % 6 ==0)
    {
        return 'É divisivel';
    } else {
        return 'Não é divisivel';
    }
});

Route::get('exercicio13', function (Request $request) {
    $nome = $request->input('nome');
    if ($nome == 'Alice' ) {
        return 'Olá Alice';
    } 
});

Route::get('exercicio14', function(Request $request){
    $idade = $request->input('idade');
    $carteira = $request->input('carteira');
    if($idade >= 18 . $carteira = 'sim'){
        return 'Pode dirigir';
    } else if($idade <18 . $carteira = 'não') {
        return 'Não pode dirigir';
    }
});


Route::get('exercicio16', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if ($numero1 < $numero2) {
        return 'O numero menor é ' . $numero1;
    } else {
        return 'O número menor é ' . $numero2;
    }
});

Route::get('exercicio17', function (Request $request) {
    $idade = $request->input('idade');
    $nome = $request->input('nome');
    if ($idade > 18) {
        return "Você é maior de idade " . $nome;
    } else {
        return 'Você é menor de idade ' . $nome;
    }
});

Route::get('exercicio18', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if($numero1 == 0) {
        return "não é possível efetuar a divisão pois o primeiro número é zero";
    } 
    else if ($numero2 == 0) {
        return 'não é possível efetuar a divisão pois o 
        segundo número é zero';
    } else{
        $resultado = $numero1 / $numero2;
    return $numero1 . "/" . $numero2 . '=' . $resultado;
    }
});

Route::get('exercicio19', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    $resultado = $numero1 * $numero2;
    if($resultado > 100){
        return 'Resultado maior que 100';
    } else if($resultado < 100){
        return 'Resultado menor que 100';
    } 
});

Route::get('exercicio20', function (Request $request) {
    $primeiroNumero = $request->input("numero1");
    $segundoNumero = $request->input('numero2');
    $resultado = $primeiroNumero + $segundoNumero;
    if($resultado % 2 ==0){
        $multiplica = $primeiroNumero * $segundoNumero;
        return $primeiroNumero . 'x' . $segundoNumero . '=' . $multiplica;
    } else {
        $dividir = $primeiroNumero % $segundoNumero;
        return $primeiroNumero . '/' . $segundoNumero . '=' . $dividir;
    }
});