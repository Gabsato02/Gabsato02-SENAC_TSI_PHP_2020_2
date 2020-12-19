<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <center>

        <h1>Resultado da busca</h1>

        <a href="./" style="display: block; margin-top: 2vh;">+ Cadastrar Novo Filme</a>
        <a href="addMovie.php" style="display: block; margin-top: 2vh;">Ver filmes</a>
        <a href="search.html" style="display: block; margin-top: 2vh;">Nova busca</a>

        <table border="1" style="margin-top: 2vh;">
            <tr>
                <td>Título</td>
                <td>Diretor</td>
                <td>Gênero</td>
            </tr>
            <?php
            if (count($table) > 0) {

                foreach ($table as $searchResult) {
                    echo "<tr>
                <td>{$searchResult['title']}</td>
                <td>{$searchResult['director']}</td>
                <td>{$searchResult['genre']}</td>
                </tr>";
                }
            } else {
                echo "<tr>
            <td colspan='3'>Não há dados para essa busca</td>
            </tr>";
            }
            ?>
        </table>
    </center>
</body>

</html>