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
                <a class="voltar" href="<?= URL_BASE; ?>index.php?url=configuracao" data-tts="Voltar para configurações">⮨</a>
                <h2>Notificações<br>e<br>Comunicados</h2>
            </div>
            <div class="container-notificacoes">
                <div>
                    <h2>Nota Lançada</h2>
                    <h3>Sua nota da Avaliação 2 de
                        Desenvolvimento Web foi
                        atualizada.</h3>
                    <p>15/07/2025 14:00</p>
                </div>
                <div>
                    <h2>Evento: Feira Tecnológica</h2>
                    <h3>Participe da feita tecnológica
                        no dia 20/08 no nosso campus principal.</h3>
                    <p>15/07/2025 14:57</p>
                </div>
                <div>
                    <h2>Atualização de Dados</h2>
                    <h3>Verifique e atualize seus dados
                        pessoais no menu de configura-
                        ções ou na guia Perfil</h3>
                    <p>15/07/2025 16:40</p>
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once 'template/footer.php';
    ?>

</body>

</html>