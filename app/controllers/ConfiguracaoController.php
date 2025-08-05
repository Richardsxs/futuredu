<?php

class ConfiguracaoController extends Controller
{
    public function index()
    {
        $dados = array();
        $dados['titulo'] = 'Configuracao';
        
        $this->carregarViews('configuracao' , $dados);

    }
}
