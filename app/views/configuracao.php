<!DOCTYPE html>
<html lang="pt-BR">
<?php
require_once 'template/head.php';
?>

<body>

    <?php
    require_once 'template/header.php';
    ?>
    <main>
        <div class="container-center">
            <div class="topo-meus-cursos">
                <a class="voltar" href="<?= URL_BASE; ?>index.php?url=menu" data-tts="Voltar para a página inicial">⮨</a>
                <h2>Configurações</h2>
            </div>
            <div>
                <div class="opcoes-config">
                    <div>
                        <div><a href="<?= URL_BASE; ?>index.php?url=atualizarPerfil" data-tts="Acessar atualização de dados pessoais">👤 Atualização de Dados Pessoais</a></div>
                        <div><a href="<?= URL_BASE; ?>index.php?url=notificacao" data-tts="Acessar configurações de notificações e comunicados">🔔 Notificações e Comunicados</a></div>
                    </div>
                    <div>
                        <a class="botao-sair" href="<?= URL_BASE; ?>index.php?url=login" data-tts="Sair da conta e voltar para a página de login">🚪 Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once 'template/footer.php';
    ?>

</body>

</html>