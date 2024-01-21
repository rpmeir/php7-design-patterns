<?php

require_once __DIR__ . '/../autoload.php';

$montadoraDeFoguetesTestI = new Builder\FabricaFoguetesDirector(new Builder\FogueteModeloIBuilder());
$montadoraDeFoguetesTestII = new Builder\FabricaFoguetesDirector(new Builder\FogueteModeloIIBuilder());

$montadoraDeFoguetesTestI->construirFoguete();
echo $montadoraDeFoguetesTestI->getFoguete();

$montadoraDeFoguetesTestII->construirFoguete();
echo $montadoraDeFoguetesTestII->getFoguete();
