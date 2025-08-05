<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FuturEdu - <?= $titulo ?></title>
    <link rel="stylesheet" href="<?= URL_BASE ?>assets/css/reset.css">
    <link rel="stylesheet" href="<?= URL_BASE ?>assets/css/style.css">
</head>

<body>
    <?php require_once 'template/header.php'; ?>
    <main>
        <div class="topo-home">
            <h2>Olá, José!</h2>
            <h3>O que você deseja fazer hoje?</h3>
        </div>
        <div class="acesso-rapido">
            <h3>Acesso Rápido</h3>
            <div><a href="<?= URL_BASE; ?>index.php?url=meusCursos" data-tts="Acessar meus cursos">📚 Meus Cursos</a></div>
            <div><a href="<?= URL_BASE; ?>index.php?url=notas" data-tts="Visualizar minhas notas">📝 Minhas Notas</a></div>
            <div><a href="<?= URL_BASE; ?>index.php?url=meusProjetos" data-tts="Acessar meus projetos">📁 Meus Projetos</a></div>
            <div><a href="<?= URL_BASE; ?>index.php?url=enviarMensagem" data-tts="Enviar mensagem para a coordenação">📨 Enviar Mensagem</a></div>
            <div><a href="<?= URL_BASE; ?>index.php?url=configuracao" data-tts="Acessar configurações do sistema">⚙️ Configurações</a></div>
        </div>
    </main>
    <?php require_once 'template/footer.php'; ?>
    <script src="<?= URL_BASE ?>assets/js/script.js"></script>
</body>

</html>