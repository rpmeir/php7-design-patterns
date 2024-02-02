<?php

require_once __DIR__ . '/../autoload.php';


$controleEstoque = new \Observer\ControleEstoqueSubject();

$emailObserver = new \Observer\EmailObserver();
$controleEstoque->adicionarObserver($emailObserver);

$controleRequisicoesCompra = new \Observer\ControleRequisicoesCompraObserver();
$controleEstoque->adicionarObserver($controleRequisicoesCompra);

$controleEstoque->atualizaEstoqueProduto("A", 0);
$controleEstoque->atualizaEstoqueProduto("B", 0);

$controleEstoque->removerObserver($controleRequisicoesCompra);

$controleEstoque->atualizaEstoqueProduto("C", 0);
