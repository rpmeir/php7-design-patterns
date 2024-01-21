<?php

require_once __DIR__ . '/../autoload.php';

$compradores = [
    'Gabriel Anhaia',
    'Anderson Scherer',
    'Braian Ottoni'
];

$livros = [];

$livroPhp = new \Prototype\LivroPhpPrototype();
$livroPhp->setTitulo('Padrões de Projeto em PHP 7.4');


foreach ($compradores as $nomeComprador) {
    $livroComprador = clone $livroPhp;
    $livroComprador->setNomeTitular($nomeComprador);
    $livros[] = $livroComprador;
}


$livroPython = new \Prototype\LivroPythonPrototype();
$livroPython->setTitulo('Livro de Python');

foreach ($compradores as $nomeComprador) {
    $livroComprador = clone $livroPython;
    $livroComprador->setNomeTitular($nomeComprador);
    $livros[] = $livroComprador;
}

print_r($livros);
