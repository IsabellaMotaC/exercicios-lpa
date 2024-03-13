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