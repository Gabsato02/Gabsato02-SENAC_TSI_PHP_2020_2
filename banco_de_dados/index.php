<?php

// mysqli_connect conecta ao BD - (host, usuário, senha, banco de dados)
$db = mysqli_connect("localhost", "root", "", "bd_php");

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* mysqli_query executa comandos no BD - (onde será executado, comando e especificações)

No exemplo abaixo, está sendo criada uma tabela chamada Contatos. Cada campo e suas especificações são
separados por uma virgula.
*/

if (mysqli_query($db, "CREATE TABLE IF NOT EXISTS contatos 
                            (id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                            nome VARCHAR(255) NOT NULL,
                            whatsapp BIGINT)")) {

    echo "Tabela criada com sucesso. <br>";
} else {

    echo "Não foi possível criar a tabela. <br>";

    echo mysqli_connect_error();
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Inserindo dados na tabela por meio de variável (array)
$contato = ["nome" => "Gabriel Sato", "whatsapp" => "5511912345678"];

//inserirDados($contato['nome'], $contato['whatsapp'], $db);

// Função para inserir dados no banco de dados
function inserirDados(string $nome, string $whats, object $db)
{
    if (mysqli_query($db, "INSERT INTO contatos 
                    (nome, whatsapp)
                    VALUES
                    ('{$nome}','{$whats}')")) {

        echo "Contato inserido com sucesso. <br><br>";
    } else {

        echo "Falha em inserir o contato. <br><br>";

        echo mysqli_connect_error();
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Consultando informações no banco de dados

function atualizarTabela(object $db)
{
    $query = mysqli_query($db, "SELECT 
                        id, nome, whatsapp 
                        FROM 
                        contatos ");

    echo "<table border>";
    echo "<tr>
        <td>ID</td>
        <td>NOME</td>
        <td>WHATSAPP</td>
        <tr>";

/* Fetch_Assoc - Obtem uma linha da tabela como uma matriz associativa
No caso abaixo, enquanto a variável registro receber dados da Query, incluirá linhas na tabela*/
while ($registro = $query->fetch_assoc()) {

    echo "<tr>
        <td>{$registro['id']}</td>
        <td>{$registro['nome']}</td>
        <td>{$registro['whatsapp']}</td>
        <tr>";
}
echo "</table><br><br>";
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Deletando informações no banco de dados - deleta tudo se não for especificado com WHERE

if (mysqli_query($db, "DELETE FROM contatos WHERE id = 10")) {
    echo "Registro apagado com sucesso! <br><br>";
} else {
    echo "Não foi possível apagar o registro! <br><br>";
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Alterando o ID para reiniciar do 1 - mysqli_query($db, "ALTER TABLE contatos AUTO_INCREMENT = 1");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// $_POST - $_GET - $_REQUEST - são vetores super globais, ou seja, sempre disponíveis


inserirDados($_POST['nome'], $_POST['whatsapp'], $db);
atualizarTabela($db);

echo "Último nome enviado: {$_POST['nome']}<br> Whatsapp: {$_POST['whatsapp']}<br><br>";
