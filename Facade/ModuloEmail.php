<?php

namespace Facade;

final class ModuloEmail
{
    public function validaServidorDeEmails(): bool
    {
        return true;
    }

    public function enviaMensagem(
        string $nomeRemetente,
        string $nomeDestinatario,
        string $enderecoEmailDestinatario,
        string $mensagem
    ): bool
    {
        echo "Email enviado com sucesso.\n";
        return true;
    }
}
