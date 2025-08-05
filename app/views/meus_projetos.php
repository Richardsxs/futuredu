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
                <h2>Meus Projetos</h2>
            </div>
            <div class="container-projetos">
                <div>
                    <h2>Sistema de biblioteca</h2>
                    <div>
                        <h3>Professor: Ana Costa</h3>
                        <h3>Período: Jan/2025 - Mar/2025</h3>
                        <h3>Nota: 10</h3>
                        <h3>Status: Concluido </h3>
                    </div>
                    <a href="" data-tts="Acessar projeto Sistema de biblioteca">🔗 Acessar Projeto</a>
                </div>
                <div>
                    <h2>Aplicativo de Tarefas</h2>
                    <div>
                        <h3>Professor: João Paulo</h3>
                        <h3>Período: Mar/2025 - SET/2025</h3>
                        <h3>Nota: 9.5</h3>
                        <h3>Status: Andamento</h3>
                    </div>
                    <a href="" data-tts="Link para Aplicativo de Tarefas ainda não disponível">🔗 Link ainda não disponível </a>
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once 'template/footer.php';
    ?>

</body>

</html>