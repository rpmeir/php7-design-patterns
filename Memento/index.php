<?php

require_once __DIR__ . '/../autoload.php';

$texto = new \Memento\Texto();

$texto->escreverTexto("A");
$texto->escreverTexto("B");
$texto->escreverTexto("C");
$texto->escreverTexto("D");

echo $texto->retornarTexto();
echo "\n";

$texto->desfazerEscrita();
echo $texto->retornarTexto();
echo "\n";

$texto->desfazerEscrita();
echo $texto->retornarTexto();
echo "\n";

$texto->escreverTexto("C");

echo $texto->retornarTexto();
echo "\n";
