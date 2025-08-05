<!DOCTYPE html>
<html lang="pt-br">

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
                <h2>Perfil do Aluno</h2>
            </div>

            <div class="perfil-aluno">
                <div>
                    <div>

                    </div>
                </div>
                <div>
                    <div>
                        <h2>Nome:</h2>
                        <h3>José da Silva</h3>
                    </div>
                    <div>
                        <h2>E-mail:</h2>
                        <h3>jose.silva@gmail.com</h3>
                    </div>
                    <div>
                        <h2>Telefone:</h2>
                        <h3>(11) 91234-5678</h3>
                    </div>
                    <div>
                        <h2>Data de Nascimento:</h2>
                        <h3>10/05/2000</h3>
                    </div>
                    <div>
                        <h2>Endereço:</h2>
                        <h3>Rua A, 100-Centro,São Paulo/SP</h3>
                    </div>
                    <div>
                        <h2>Responsável:</h2>
                        <h3>Maria da Silva - (11) 91234-5679</h3>
                    </div>
                </div>
            </div>
            <div class="botao-atualizar-dados">
                <a href="<?= URL_BASE; ?>index.php?url=perfil" data-tts="Clique para atualizar seus dados pessoais">Atualizar Dados</a>
            </div>
        </div>
    </main>
    <?php
    require_once 'template/footer.php';
    ?>
</body>

</html>