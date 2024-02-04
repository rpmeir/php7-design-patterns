<?php

namespace Strategy;

abstract class CompressaoStrategy
{
    public function renomearArquivosEmOrdem(): void
    {
        echo 'Arquivos renomeados!';
    }

    abstract public function comprimir(string $caminhoArquivos): bool;
}
