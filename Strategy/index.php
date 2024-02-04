<?php

require_once __DIR__ . '/../autoload.php';

$strategyRar = new Strategy\ComprimirRar();
$strategyZip = new Strategy\ComprimirZip();
$strategyTar = new Strategy\ComprimirTar();

$compressaoContext = new Strategy\CompressaoContext($strategyRar);

$compressaoContext->comprimir('arquivo1.txt');
echo "\n";

$compressaoContext->setCompressaoStrategy($strategyZip);
$compressaoContext->comprimir('arquivo1.txt');
echo "\n";

$compressaoContext->setCompressaoStrategy($strategyTar);
$compressaoContext->comprimir('arquivo1.txt');
echo "\n";
