<?php

namespace Facade;

class ModuloControleEstoque
{
    public function registraRetirada(string $codigoDoLivro, int $cpfDoCliente): bool
    {
        if ($codigoDoLivro && $cpfDoCliente) {
            return true;
        }
        return false;
    }

    public function validaEstoque(string $codigoDoLivro): bool
    {
        $estoqueDisponivel = true;
        if ($estoqueDisponivel && $codigoDoLivro) {
            echo "Registro de retirada efetuado com sucesso.\n";
            return true;
        }
        return false;
    }
}
