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
                <h2>Notas Do Curso</h2>
            </div>
            <div class="container-notas">
                <h2>DevWeb-01</h2>
                <div>
                    <h2>Avaliação 1</h2>
                    <div>
                        <h4>Nota: 8.0</h4>
                        <h4>Data: 16/05/2025</h4>
                    </div>
                    <h3>Observação</h3>
                    <div>
                        <p>Boa estrutura de códigos,
                            utilize mais comentários</p>
                    </div>
                </div>
                <div>
                    <h2>Projeto Pratico</h2>
                    <div>
                        <h4>Nota: 9.0</h4>
                        <h4>Data: 19/05/2025</h4>
                    </div>
                    <h3>Observação</h3>
                    <div>
                        <p>Ótimo projeto, bem documentado, mas
                            ainda pode melhorar nos comentários </p>
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