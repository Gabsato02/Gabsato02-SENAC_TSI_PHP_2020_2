<?php include '../../header_tpl.php' ?>

<center>
    <table border='1' style='margin-top: 100px;'>
        <tr>
            <td>
                <!-- Quando não se define um Action pro formulário, ele retorna o método para a mesma página !-->
                <form method='post' action=''>
                <center>
                    <font color='red'>
                        <?php
                            if (count($errors) > 0) {

                                foreach ($errors as $error) {
                                    echo "{$error} <br>";
                                }
                            }
                        ?>
                    </font>

                    <h1>Crie sua conta</h1>
                    <br>
                    <label for='login'>Login</label><br>
                    <input type='text' name='login' id='login' required>
                    <br><br>
                    <label for='password'>Senha</label><br>
                    <input type='password' name='password' id='password' required>
                    <br><br>
                    <label for='passwordCheck'>Confirme sua senha</label><br>
                    <input type='password' name='passwordCheck' id='passwordCheck' required>
                    <br><br>
                    <input type='submit' name='register' value='Cadastrar'>
                    <br>
                    </center>
                </form>
            </td>
        </tr>
    </table>
</center>
</body>


<?php include '../../footer_tpl.php'; ?>

</html>