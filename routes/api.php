<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function (Request $request) {
    $nome = $request->input('name');
    return $nome;
});

Route::get('receber/nome/idade', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    return $nome . $idade;
});

Route::get('nome/usuario', function (Request $request) {
    $nome = $request->input('nome');
    $nascimento = $request->input('nascimento');
    $cidade = $request->input('cidade');
    return 'Meu nome é ' . $nome . ' nasci no ano de ' . $nascimento . ' na cidade de ' . $cidade;
});

Route::get('soma', function (Request $request) {
    $primeiroNumero = $request->input("primeiroN");
    $segundoNumero = $request->input('segundoN');
    $resultado = $primeiroNumero + $segundoNumero;
    return 'O resultado da soma dos números é: ' . $primeiroNumero . '+' . $segundoNumero . '=' . $resultado;
});

Route::get('subtração', function (Request $request) {
    $primeiroNumero = $request->input('primeiroN');
    $segundoNumero = $request->input('segundoN');
    $terceiroNumero = $request->input('terceiroN');
    $resultado = $primeiroNumero - $segundoNumero - $terceiroNumero;
    return 'O resultado da subtração é: ' . $primeiroNumero . '-' . $segundoNumero . '-' . $terceiroNumero . '=' . $resultado;
});

Route::get('divisão', function (Request $request) {
    $primeiroNumero = $request->input('primeiroN');
    $segundoNumero = $request->input('segundoN');
    $resultado = $segundoNumero / $primeiroNumero;
    return 'O resultado da divisão é: ' . $segundoNumero . '/' . $primeiroNumero . '=' . $resultado;
});

Route::get('receber/divisão', function (Request $request) {
    $primeiroNumero = $request->input('primeiroN');
    $segundoNumero = $request->input('segundoN');
    $resultado = $primeiroNumero / $segundoNumero;
    return $primeiroNumero . "/" . $segundoNumero . '=' . $resultado;
});

Route::get('multiplicação', function (Request $request) {
    $primeiroNumero = $request->input('primeiroN');
    $segundoNumero = $request->input('segundoN');
    $resultado = $primeiroNumero * $segundoNumero;
    return $primeiroNumero . 'x' . $segundoNumero . '=' . $resultado;
});