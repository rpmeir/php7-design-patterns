<?php

require_once __DIR__ . '/../autoload.php';

$integracaoLegado = new \Adapter\IntegracaoErp();

$integracaoErpAdapter = new \Adapter\IntegracaoErpAdapter($integracaoLegado);

$token = $integracaoErpAdapter->gerarToken('12345', 'RODRIGO_MEIRA');

$pedidoDeTeste = new \Adapter\Pedido();

$pedidoDeTeste->setValorTotal(3509.50)
    ->setNumeroPedido(123456)
    ->addProduto('IPhone X')
    ->addProduto('Carregador sem Fio IPhone X');

$pedidoEnviadoComSucesso = $integracaoErpAdapter->enviarPedido($pedidoDeTeste, $token);

echo 'Pedido ' . ($pedidoEnviadoComSucesso ? 'enviado com sucesso!' : 'nao enviado!') . PHP_EOL;
