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
    <header>
        <h1><img src="assets/img/logo_black.png" alt="Logo FuturEdu">
            <span style="display:none; color:#753B9D; font-size:24px;">FuturEdu</span>
        </h1>
    </header>

    <div class="container-center">
        <div class="topo-cadastro">
            <a class="voltar" href="<?= URL_BASE; ?>index.php?url=login" onclick="history.back(); return false;">⮨</a>
            <h2>Cadastre-se</h2>
        </div>

        <div class="info-cadastro">
            <div onclick="document.getElementById('foto').click()">
                Adicionar Foto
                <input type="file" id="foto" accept="image/*" style="display:none;" data-tts="Clique para adicionar foto">
            </div>

            <form id="cadastroForm" method="POST" action="<?= URL_BASE; ?>">
                <div>
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" required data-tts="Digite seu nome completo">
                </div>

                <div>
                    <label for="nome_social">Nome Social</label>
                    <input type="text" id="nome_social" name="nome_social" data-tts="Digite seu nome social se desejar">
                </div>

                <div>
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" maxlength="14" required data-tts="Digite seu CPF">
                </div>

                <div>
                    <label for="rg">RG</label>
                    <input type="text" id="rg" name="rg" required data-tts="Digite seu RG">
                </div>

                <div>
                    <label for="data_nasc">Data de Nascimento</label>
                    <input type="date" id="data_nasc" name="data_nasc" required data-tts="Informe sua data de nascimento">
                </div>

                <div>
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required data-tts="Informe seu e-mail">
                </div>

                <div>
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" minlength="6" required data-tts="Insira uma senha com pelo menos 6 caracteres">
                </div>

                <div>
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="telefone" data-tts="Digite seu telefone fixo se possuir">
                </div>

                <div>
                    <label for="celular">Celular</label>
                    <input type="tel" id="celular" name="celular" required data-tts="Digite seu número de celular">
                </div>

                <div class="endereco-cadastro">
                    <div>
                        <label for="cep">CEP</label>
                        <input type="text" id="cep" name="cep" maxlength="9" required data-tts="Digite seu CEP para buscar o endereço automaticamente">
                        <div class="loading" id="cepLoading"></div>
                        <div class="error-message" id="cepError"></div>
                        <div class="success-message" id="cepSuccess"></div>
                    </div>
                    <div>
                        <label for="numero">Número</label>
                        <input type="text" id="numero" name="numero" required data-tts="Digite o número da sua residência">
                    </div>
                </div>

                <div class="box-endereco">
                    <label for="endereco">Endereço</label>
                    <input style="border-radius: 10px 10px 0 0 !important;" type="text" id="endereco" name="endereco" required>
                    <input type="text" id="bairro" name="bairro" required>
                    <div class="cidade-estado-display">
                        <span id="cidadeDisplay"></span> / <span id="estadoDisplay"></span>
                    </div>
                    <!--  armazenar os dados -->
                    <input type="hidden" id="cidade" name="cidade" required>
                    <input type="hidden" id="estado" name="estado" required>
                </div>

                <div>
                    <label for="complemento">Complemento</label>
                    <input type="text" id="complemento" name="complemento" data-tts="Digite complemento do endereço se houver, como apartamento ou bloco">
                </div>

                <div>
                    <label for="responsavel">Responsável</label>
                    <input type="text" id="responsavel" name="responsavel" data-tts="Digite o nome do responsável se necessário">
                </div>

                <div>
                    <label for="telefone_responsavel">Telefone do Responsável</label>
                    <input type="tel" id="telefone_responsavel" name="telefone_responsavel" data-tts="Digite o telefone do responsável se necessário">
                </div>

                <div>
                    <label for="email_responsavel">E-mail do Responsável</label>
                    <input type="email" id="email_responsavel" name="email_responsavel" data-tts="Digite o e-mail do responsável se necessário">
                </div>
                <button class="button-cadastrar" onclick="submitForm()" data-tts="Clique para cadastrar">Cadastrar</button>
            </form>

        </div>
    </div>

    <script src="assets/js/script.js"></script>

    <script>
        // buscar CEP
        async function buscarCEP(cep) {
            const loading = document.getElementById('cepLoading');
            const errorMsg = document.getElementById('cepError');
            const successMsg = document.getElementById('cepSuccess');

            // limpar mensagens anteriores
            errorMsg.style.display = 'none';
            successMsg.style.display = 'none';
            loading.style.display = 'inline-block';

            try {
                const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
                const data = await response.json();

                loading.style.display = 'none';

                if (data.erro) {
                    errorMsg.textContent = 'CEP não encontrado';
                    errorMsg.style.display = 'block';
                    return;
                }

                // preencher os campos
                document.getElementById('endereco').value = data.logradouro || '';
                document.getElementById('bairro').value = data.bairro || '';

                // guardar as imformações
                document.getElementById('cidade').value = data.localidade || '';
                document.getElementById('estado').value = data.uf || '';

                // mostrar
                document.getElementById('cidadeDisplay').textContent = data.localidade || 'Cidade';
                document.getElementById('estadoDisplay').textContent = data.uf || 'UF';

                successMsg.textContent = 'CEP encontrado!';
                successMsg.style.display = 'block';

                // focar no campo de número
                document.getElementById('numero').focus();

            } catch (error) {
                loading.style.display = 'none';
                errorMsg.textContent = 'Erro ao buscar CEP';
                errorMsg.style.display = 'block';
            }
        }

        // formatização para CEP
        document.getElementById('cep').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 5) {
                value = value.substring(0, 5) + '-' + value.substring(5, 8);
            }
            e.target.value = value;

            // buscar o CEP automaticamente quando completar
            if (value.length === 9) {
                buscarCEP(value.replace('-', ''));
            }
        });

        // formatização para CPF
        document.getElementById('cpf').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 3) value = value.substring(0, 3) + '.' + value.substring(3);
            if (value.length > 7) value = value.substring(0, 7) + '.' + value.substring(7);
            if (value.length > 11) value = value.substring(0, 11) + '-' + value.substring(11, 13);
            e.target.value = value;
        });

        // formatização para telefone
        function aplicarMascaraTelefone(input) {
            input.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length > 0) value = '(' + value;
                if (value.length > 3) value = value.substring(0, 3) + ') ' + value.substring(3);
                if (value.length > 10) value = value.substring(0, 10) + '-' + value.substring(10, 14);
                e.target.value = value;
            });
        }

        aplicarMascaraTelefone(document.getElementById('telefone'));
        aplicarMascaraTelefone(document.getElementById('celular'));
        aplicarMascaraTelefone(document.getElementById('telefone_responsavel'));

        // enviar formulário
        function submitForm() {
            const form = document.getElementById('cadastroForm');
            if (form.checkValidity()) {

                alert('Cadastro realizado com sucesso!');

            } else {
                alert('Por favor, preencha todos os campos obrigatórios.');
                form.reportValidity();
            }
        }

        // preview da foto
        document.getElementById('foto').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const fotoDiv = document.querySelector('.info-cadastro > div:first-child');
                    fotoDiv.style.backgroundImage = `url(${e.target.result})`;
                    fotoDiv.style.backgroundSize = 'cover';
                    fotoDiv.style.backgroundPosition = 'center';
                    fotoDiv.textContent = '';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>