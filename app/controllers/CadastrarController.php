<?php

class CadastrarController extends Controller
{
    public function index()
    {
        $dados = array();
        $dados['titulo'] = 'Cadastrar';
        
        $this->carregarViews('cadastrar' , $dados);

    }
}
