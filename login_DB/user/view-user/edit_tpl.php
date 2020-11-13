
<center>
    <table border='1' style='margin-top: 100px;'>
        <tr>
            <td>
                <!-- Quando não se define um Action pro formulário, ele retorna o método para a mesma página !-->
                <form method='post' action=''>
                <center>

                <font color='red'>
                        <?php
                        if (isset($errors)) {
                            if (count($errors) > 0) {

                                foreach ($errors as $error) {
                                    echo "{$error} <br>";
                                }
                            }
                        }
                        ?>
                    </font>

                    <font color='green'>
                        <?php 
                        if (isset($editOutcome)) {
                            echo "Editado com sucesso!";
                        }
                        ?>
                    </font>

                    <h1>Editar usuário</h1>
                    <br>
                    <label for='login'>Login</label><br>
                    <input type='text' name='login' id='login' value="<?php echo $email;?>" required>
                    <br><br>
                    <label for='password'>Nova Senha</label><br>
                    <input type='password' name='password' id='password' required>
                    <br><br>
                    <label for='passwordCheck'>Confirme sua nova senha</label><br>
                    <input type='password' name='passwordCheck' id='passwordCheck' required>
                    <br><br>
                    <input type='submit' name='update' value='Gravar'>
                    <br>
                    </center>
                </form>
            </td>
        </tr>
    </table>
</center>
</body>


<?php include '../footer_tpl.php'; ?>

</html>