<?php

namespace Facade;

class ModuloControleClientes
{
    public function buscaCliente(string $cpfCliente): array
    {
        // Simula a busca de um cliente
        return [
            'nome' => 'Nome do Cliente',
            'telefone' => '98798798494',
            'email' => 'email@email.com',
            'cpf' => $cpfCliente,
        ];
    }
}
