<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>

<body>
    <center>
        <table border='1'>
            <tr>
                <td>
                    <!-- Quando não se define um Action pro formulário, ele retorna o método para a mesma página !-->
                    <form method='POST'>
                        <h1>Login</h1>
                    <br>
                        <label for='login'>Login</label><br>
                        <input type='text' name='login' id='login'>
                        <br><br>
                        <label for='password'>Senha</label><br>
                        <input type='password' name='password' id='password'>
                        <br><br>
                        <input type='submit' name='enter' value='Entrar'>
                        <a href='user/register.php' style='float:right;'><span>Cadastre-se</span></a>
                        <br>
                        <?php echo (isset($message)) ? $message : ""; ?>
                    </form>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>