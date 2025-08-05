<?php

class MeusProjetosController extends Controller
{
    public function index()
    {
        $dados = array();
        $dados['titulo'] = 'Meus Projetos';
        
        $this->carregarViews('meus_projetos' , $dados);

    }
}
