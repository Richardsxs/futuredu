// Função para fazer o texto do data-tts ser falado
function speak(text) {
    if ('speechSynthesis' in window) {
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'pt-BR';
        window.speechSynthesis.cancel();// parar a fala anterior da atual
        window.speechSynthesis.speak(utterance);//falar o texto atual
    }
}

//Seleciona todos os elementos da telapara leitura
document.querySelectorAll('[data-tts]').forEach(el => {
    const texto = el.getAttribute('data-tts');

    //Falar ao clicar
    el.addEventListener('click', function (e) {
        speak(texto);
    });

    //Falar ao focar
    el.addEventListener('focus', function (e) {
        speak(texto);

    });

});

//Link de redefinição de senha
function enviarEmail(event) {
    event.preventDefault();
    const msg = document.getElementById('mensagem');
    msg.style.display = "block";

    // desativar o input e o botão
    document.getElementById('email').disabled = true;
    event.target.querySelector('button').disabled = true;

    //após 5 segundos redirecionar para a index

    setTimeout(() => {
        window.location.href = 'index.php';
    }, 5000);

}

let pixel = 0.5; //medida em pixel que vai aumentar ou diminuir a fonte


function aumentarFonte() {
    const elementos = document.querySelectorAll('body, body *');

    elementos.forEach(el => {
        const estilo = window.getComputedStyle(el);
        const tamanho = parseFloat(estilo.fontSize);

        if (!isNaN(tamanho)) {
            el.style.fontSize = (tamanho + pixel) + 'px';
        }

    });

}


function diminuirFonte() {
    const elementos = document.querySelectorAll('body, body *');

    elementos.forEach(el => {
        const estilo = window.getComputedStyle(el);
        const tamanho = parseFloat(estilo.fontSize);

        if (!isNaN(tamanho)) {
            el.style.fontSize = (tamanho - pixel) + 'px';
        }

    });

}