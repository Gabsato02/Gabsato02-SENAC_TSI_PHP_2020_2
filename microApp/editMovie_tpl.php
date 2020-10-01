<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
</head>

<body>
    <br><br>
    <a href="addMovie.php">Voltar</a>
    <br><br>
    <h1>Edite os dados do filme:</h1>
    <br>
    <?php 
    if ( isset($message)) echo $message; 
    ?>
    <br><br>
    <form method="POST" action="editMovie.php">

        <input type="hidden" name="id" value="<?php echo $movie['id'] ?>">

        <laber for="title">Título:</laber>
        <input type="text" name="title" value="<?php echo $movie['title'] ?>"><br><br>

        <laber for="director">Diretor:</laber>
        <input type="text" name="director" value="<?php echo $movie['director'] ?>"><br><br>

        <laber for="genre">Gênero:</laber>
        <input type="text" name="genre" value="<?php echo $movie['genre'] ?>"><br><br>

        <input type="submit" value="Editar">
    </form>
</body>

</html>