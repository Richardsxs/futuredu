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
                <a class="voltar" href="<?= URL_BASE; ?>index.php?url=configuracao.php" data-tts="Voltar para configurações">⮨</a>
                <h2>Atualizar Dados</h2>
            </div>

            <div class="atualizar-dados">
                <div>
                </div>
                <form class="form-atualizar">

                    <div>
                        <label for="nome">Nome completo:</label>
                        <input type="text" id="nome" name="nome" placeholder="José da Silva" data-tts="Digite seu nome completo para atualizar">
                    </div>

                    <div>
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" placeholder="jose.silva@gmail.com" data-tts="Digite seu e-mail para atualizar">
                    </div>

                    <div>
                        <label for="telefone">Telefone:</label>
                        <input type="text" id="telefone" name="telefone" placeholder="(11) 91234-5678" data-tts="Digite seu telefone para atualizar">
                    </div>

                    <div>
                        <label for="data_nasc">Data de Nascimento:</label>
                        <input type="text" id="data_nasc" name="data_nasc" placeholder="10/05/2000" data-tts="Digite sua data de nascimento para atualizar">
                    </div>

                    <div>
                        <label for="endereco">Endereço:</label>
                        <input type="text" id="endereco" name="endereco" placeholder="Rua A, 100 - Centro, São Paulo/SP" data-tts="Digite seu endereço completo para atualizar">
                    </div>

                    <div>
                        <label for="responsavel">Responsável:</label>
                        <input type="text" id="responsavel" name="responsavel" placeholder="Maria da Silva - (11) 91234-5679" data-tts="Digite os dados do responsável para atualizar se necessário">
                    </div>
                </form>
            </div>

            <div class="botao-salvar-dados">
                <a href="<?= URL_BASE; ?>index.php?url=perfil" data-tts="Clique para salvar as alterações realizadas">Salvar Alterações</a>
            </div>
        </div>
    </main>
    <?php
    require_once 'template/footer.php';
    ?>
</body>

</html>