<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>app</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="midle">
        <div class="container-center">
            <div class="login-box">
                <div>

                    <h1 style="margin:40px 0;text-align:center;color:#753B9D; font-size: 26px;">Redefinir Senha</h1>
                    <form class="redefinir-senha" id="resetForm" onsubmit="enviarEmail(event)">
                        <h2 style="text-align: center; font-size:16px;">Informa seu e-mail para enviarmos o link de redefinição</h2>
                        <input type="email" id="email" placeholder="Digite seu e-mail" required data-tts="Digite seu e-mail para enviarmos o link de redefinição">

                        <button type="submit" class="button-entrar" data-tts="Enviar">Enviar</button>
                        <p id="mensagem" class="mesagem-sucesso" style="display:none;">
                            ✅ Link de redefinição enviado para seu e-mail.
                        </p>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>
