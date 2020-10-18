<?php

require 'session.php'; ?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Pesquisa de satisfação</title>
</head>

<body>
    <center>
        <?php
        include 'header_tpl.php';
        include 'index_menu_tpl.php';
        include 'footer_tpl.php';
        ?>
        <h1>Pesquisa de satisfação</h1>
        <span>Qual a probabilidade de você recomendar a empresa a um colega?</span>
        <form style='display: block; margin-top: 2vh;' method='post' action='nps.php'>
            <span>Pouco Provável</span>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<input type='radio' id='radio$i' name='nps' value='$i'>
                  <label for='radio$i'>$i</label>";
            }
            ?>
            <span>Muito Provável</span>
            <label for='observation' style='display: block; margin-top: 2vh;'>Qual o motivo de sua nota?</label>
            <textarea style='display: block; resize: none; margin-top: 2vh;' cols='80' rows='5' id='observation' name='observation'></textarea>

            <input style='display: block; margin-top: 2vh;' type='submit'>

        </form>
    </center>
</body>

</html>