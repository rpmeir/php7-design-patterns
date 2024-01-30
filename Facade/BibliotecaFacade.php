<?php

namespace Facade;

use Facade\{
    ModuloControleEstoque, ModuloControleClientes, ModuloEmail, ModuloApiSms
};

class BibliotecaFacade
{
    public function efetuaRetirada(string $codigoLivro, string $cpfCliente): bool
    {
        $moduloControleEstoque = new ModuloControleEstoque();

        if(!$moduloControleEstoque->validaEstoque($codigoLivro)) {
            throw new Exception('Estoque indisponível');
        }

        return $moduloControleEstoque->registraRetirada($codigoLivro, $cpfCliente);
    }

    public function disparaMensagens(
        string $codigoDoLivro,
        string $cpfDoCliente,
        string $apiKey,
        string $apiPass
    ): bool
    {
        $moduloControleClientes = new ModuloControleClientes();
        $moduloEmail = new ModuloEmail();
        $moduloSms = new ModuloApiSms();

        $cliente = $moduloControleClientes->buscaCliente($cpfDoCliente);

        if($moduloEmail->validaServidorDeEmails()) {
            $moduloEmail->enviaMensagem(
                'Biblioteca de Teste',
                $cliente['nome'],
                $cliente['email'],
                "Aluguel de livro de código '{$codigoDoLivro}' efetuado com sucesso!"
            );
        }

        $token = $moduloSms->geraTokenApi($apiKey, $apiPass);
        $moduloSms->enviaSms(
            $token,
            'Biblioteca de Teste',
            $cliente['nome'],
            $cliente['telefone'],
            "Aluguel de livro de código '{$codigoDoLivro}' efetuado com sucesso!"
        );

        return true;
    }
}
