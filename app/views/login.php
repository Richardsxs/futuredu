<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FuturEdu - <?= $titulo ?></title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="midle">
        <div class="container-center">
            <div class="login-box">
                <div>
                    <div>
                        <img src="assets/img/logo_black.png" alt="">
                        <span style="display:none; color:#753B9D; font-size:24px;">FuturEdu</span>
                    </div>
                    <h1 style="margin:40px 0;text-align:center;color:#753B9D; font-size: 26px;">Login do Aluno</h1>
                    <form action="<?= URL_BASE ?>index.php?url=menu" method="POST">
                        <div class="login">
                            <div>
                                <h2>E-mail</h2>
                                <input type="email" name="email" data-tts="E-mail">
                            </div>
                            <div>
                                <h2>Senha</h2>
                                <input type="password" name="senha" data-tts="Senha">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="button-entrar" data-tts="Entrar">Entrar</button>
                            <p><a href="<?= URL_BASE; ?>index.php?url=esqueciSenha" data-tts="Esqueceu a senha?">Esqueceu a senha?</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <p class="login-cadastrar" data-tts="Ainda não tem cadastro?">Ainda não tem cadastro? <a href="<?= URL_BASE; ?>index.php?url=cadastrar" data-tts="Cadastre-se">Cadastre-se</a></p>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>