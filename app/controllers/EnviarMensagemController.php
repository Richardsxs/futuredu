<?php

class EnviarMensagemController extends Controller
{
    public function index()
    {
        $dados = array();
        $dados['titulo'] = 'Enviar Mensagem';
        
        $this->carregarViews('enviar_mensagem' , $dados);

    }
}
