<?php

/*PDO(PHP Data Objects) é um módulo de PHP montado sob o paradigma Orientado a Objetos, 
cujo objetivo é prover uma padronização da forma com que PHP se comunica com um banco de dados relacional */

/* require_once "config.php" retorna um erro fatal caso não consiga fazer a requisição
O include_once retorna um warning caso não consiga fazer a requisição*/
require_once "config.php";

// objeto que é instância da classe que realiza a conexão
$objDatabase = new PDO(DSN, DBUSER, DBPASSWORD);

/* A variável recebe uma consulta, através da função query, que é uma possibilidade quando se usa o PDO, e o retorno será
no formato FETCH_ASSOC, que retornará um array com índices alfanuméricos */
$consulta = $objDatabase->query("SELECT id, nome, whatsapp FROM contatos", PDO::FETCH_ASSOC);

// Para cada item do Array $consulta, na posição $ind, é atribuído o valor a variável $registro
foreach ($consulta as $ind => $registro) {
    echo "ID: {$registro["id"]} NOME: {$registro["nome"]} WZAP: {$registro["whatsapp"]}  <br> ";
}

 if ($objDatabase->query("DELETE FROM contatos ")) {
    echo "Deletado com sucesso.";
} else {
    echo "Falha ao deletar.";
}

if ($objDatabase->query("UPDATE contatos SET nome = 'Enéias' WHERE id = 4")) {
    echo "Atualizado com sucesso.";
} 
else {
    echo "Falha ao atualizar.";
}

if ($objDatabase->query("INSERT INTO contatos (nome, whatsapp) VALUES ('Fulano da Silva', 1234567")) {
    echo "Inserido com sucesso.";
} else {
    echo "Falha ao inserir.";
}
