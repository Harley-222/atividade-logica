<?php

$alcatra = false;
$file = false;
$picanha = true;
$cartao = true;

$kilo = 7;



if ($alcatra == true) {
    if ($kilo <= 5) {
        if ($cartao == true) {
            $preco_carne = 5.9 * $kilo;

            $desconto = (($preco_carne) / 100 * 5);
            $desconto_aplicado = $desconto;

            $preco_pago = $preco_carne - $desconto_aplicado;

            echo "CUPOM FISCAL:\nCarne escolhida: Alcatra\nDesconto: $desconto_aplicado \nPreço total: $preco_carne\nValor com desconto aplicado: $preco_pago";
        } else {
            $preco_carne = 5.9 * $kilo;
            $preco_pago = $preco_carne;

            echo "CUPOM FISCAL:\nCarne escolhida: Alcatra\nDesconto: $desconto_aplicado \nPreço total: $preco_carne\nValor com desconto aplicado: $preco_pago";
        }
    } elseif ($kilo > 5) {
        if ($cartao == true) {
            $preco_carne = 6.8 * $kilo;

            $desconto = (($preco_carne) / 100 * 5);
            $desconto_aplicado = $desconto;

            $preco_pago = $preco_carne - $desconto_aplicado;

            echo "CUPOM FISCAL:\nCarne escolhida: Alcatra\nDesconto: $desconto_aplicado \nPreço total: $preco_carne\nValor com desconto aplicado: $preco_pago";
        } else {
            $preco_carne = 6.8 * $kilo;
            $preco_pago = $preco_carne;

            echo "CUPOM FISCAL:\nCarne escolhida: Alcatra\nDesconto: $desconto_aplicado \nPreço total: $preco_carne\nValor com desconto aplicado: $preco_pago";
        }
    }
}

if ($file == true) {
    if ($kilo < 5) {
        if ($cartao == true) {
            $preco_carne = 4.9 * $kilo;

            $desconto = (($preco_carne) / 100 * 5);
            $desconto_aplicado = $desconto;

            $preco_pago = $preco_carne - $desconto_aplicado;

            echo "CUPOM FISCAL:\nCarne escolhida: File\nDesconto: $desconto_aplicado \nPreço total: $preco_carne\nValor com desconto aplicado: $preco_pago";
        } else {
            $preco_carne = 4.9 * $kilo;
            $preco_pago = $preco_carne;

            echo "CUPOM FISCAL:\nCarne escolhida: File\nDesconto: $desconto_aplicado \nPreço total: $preco_carne\nValor com desconto aplicado: $preco_pago";
        }
    } elseif ($kilo > 5) {
        if ($cartao == true) {
            $preco_carne = 5.9 * $kilo;

            $desconto = (($preco_carne) / 100 * 5);
            $desconto_aplicado = $desconto;

            $preco_pago = $preco_carne - $desconto_aplicado;

            echo "CUPOM FISCAL:\nCarne escolhida: File\nDesconto: $desconto_aplicado \nPreço total: $preco_carne\nValor com desconto aplicado: $preco_pago";
        } else {
            $preco_carne = 5.9 * $kilo;
            $preco_pago = $preco_carne;

            echo "CUPOM FISCAL:\nCarne escolhida: File\nDesconto: $desconto_aplicado \nPreço total: $preco_carne\nValor com desconto aplicado: $preco_pago";
        }
    }
}

if ($picanha == true) {
    if ($kilo < 5) {
        if ($cartao == true) {
            $preco_carne = 6.9 * $kilo;

            $desconto = (($preco_carne) / 100 * 5);
            $desconto_aplicado = $desconto;

            $preco_pago = $preco_carne - $desconto_aplicado;

            echo "CUPOM FISCAL:\nCarne escolhida: Picanha\nDesconto: $desconto_aplicado \nPreço total: $preco_carne\nValor com desconto aplicado: $preco_pago";
        } else {
            $preco_carne = 6.9 * $kilo;
            $preco_pago = $preco_carne;

            echo "CUPOM FISCAL:\nCarne escolhida: Picanha\nDesconto: $desconto_aplicado \nPreço total: $preco_carne\nValor com desconto aplicado: $preco_pago";
        }
    } elseif ($kilo > 5) {
        if ($cartao == true) {
            $preco_carne = 7.8 * $kilo;

            $desconto = (($preco_carne) / 100 * 5);
            $desconto_aplicado = $desconto;

            $preco_pago = $preco_carne - $desconto_aplicado;

            echo "CUPOM FISCAL:\nCarne escolhida: Picanha\nDesconto: $desconto_aplicado \nPreço total: $preco_carne\nValor com desconto aplicado: $preco_pago";
        } else {
            $preco_carne = 7.8 * $kilo;
            $preco_pago = $preco_carne;

            echo "CUPOM FISCAL:\nCarne escolhida: Picanha\nDesconto: $desconto_aplicado \nPreço total: $preco_carne\nValor com desconto aplicado: $preco_pago";
        }
    }
}

?>