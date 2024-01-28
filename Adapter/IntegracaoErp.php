<?php

namespace Adapter;

class IntegracaoErp
{
    public function token($apiKey): string
    {
        return 'TOKEN_GERADO_VIA_API';
    }

    public function pedido($pedido, $apiKey): bool
    {
        return true;
    }

}
