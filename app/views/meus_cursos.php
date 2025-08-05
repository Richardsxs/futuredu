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
    <?php
    require_once 'template/header.php';
    ?>
    <main>
        <div class="container-center">
            <div class="topo-meus-cursos">
                <a class="voltar" href="<?= URL_BASE; ?>index.php?url=menu" data-tts="Voltar para a página inicial">⮨</a>
                <h2>Cursos Matriculados</h2>
            </div>
            <div class="meus-cursos">

                <div>
                    <div></div>
                    <div>
                        <div>
                            <h2>DEVWEB01</h2>
                            <h3>Desenvolvimento Web</h3>
                        </div>
                        <div>
                            <h4>Modalidade: Presencial</h4>
                            <h4>Carga Horaria: 200h</h4>
                        </div>
                    </div>
                </div>
                <div>
                    <div></div>
                    <div>
                        <div>
                            <h2>DESGRA01</h2>
                            <h3>Design Grafico</h3>
                        </div>
                        <div>
                            <h4>Modalidade: Online</h4>
                            <h4>Carga Horaria: 160h</h4>
                        </div>
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