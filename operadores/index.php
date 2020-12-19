<?php
// Não é necessário fechar a tag do PHP, a não ser que queira interromper a exceução deste
echo "Olá mundo!<br>";

// Declaração de variáveis
$saldo = 50;

// Aspas duplas funcionam como template string
echo "Você tem $saldo reais! <br>";

// Aspas simples funcionam como string pura
echo 'Você tem $saldo reais! <br>';

// Operadores funcionam como em outras linguagens
$soma = $saldo + 10;
$subtracao = $saldo - 10;
$multiplicacao = $saldo * 10;
$divisao = $saldo / 10;

echo "$saldo + 10 é $soma<br>";
echo "$saldo - 10 é $subtracao<br>";
echo "$saldo * 10 é $multiplicacao<br>";
echo "$saldo / 10 é $divisao<br>";