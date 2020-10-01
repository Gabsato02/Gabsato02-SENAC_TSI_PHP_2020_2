<html>
    <head>
    <meta charset="UTF-8">
    </head>
    <body>
        <center>
            <h1>
                <?php echo $message ?>
            </h1>
        
        <br><br>
        <a href="./">Voltar para o formulário</a>
        <br><br>
        <table border="1">
            <tr>
                <td>ID</td><td>Título</td><td>Diretor</td><td>Gênero</td><td>Gerenciar</td>
            </tr>
            <?php 
            if (count($table) > 0) {

                foreach($table as $id => $register) {
                    echo "<tr>
                    <td>$id</td>
                    <td>{$register['title']}</td>
                    <td>{$register['director']}</td>
                    <td>{$register['genre']}</td>
                    <td><a href='editMovie.php?id=$id'>Editar</a>
                    <a href='deleteMovie.php?id=$id'>Apagar</a></td>
                    </tr>";

            }} else {
                echo "<tr>
                <td colspan='3'>Não há dados</td>
                </tr>";
            }           
           ?>
        </table>
        </center>
    </body>
</html>