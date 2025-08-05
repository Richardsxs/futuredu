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
                <h2>Contato com a
                    Coordenação</h2>
            </div>
            <div class="container-contato">
                <div>
                    <h2>Formas de contato</h2>
                    <h3>E-mail: coordenação@futuredu.com.br</h3>
                    <h3>Telefone: (11) 4002-8922</h3>
                    <h3>WhatsApp: (11) 98888-7766</h3>
                    <h3>Horário Atend: Seg á Sex, 08h às 17h</h3>
                </div>
                <div>
                    <form method="post" action="#">
                        <label for="assunto">Assunto</label>
                        <input type="text" id="assunto" name="assunto" placeholder="Assunto da mensagem" required data-tts="Digite o assunto da sua mensagem para a coordenação">

                        <label for="msg">Mensagem</label>
                        <textarea id="msg" name="msg" placeholder="Digite sua mensagem aqui..." rows="5" required data-tts="Digite sua mensagem completa para a coordenação"></textarea>


                        <div class="botao-enviar-msg">
                            <button type="submit" data-tts="Clique para enviar sua mensagem para a coordenação">Enviar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>
    <?php
    require_once 'template/footer.php';
    ?>

</body>

</html>