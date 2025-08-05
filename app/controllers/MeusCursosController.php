<?php

class MeusCursosController extends Controller
{
    public function index()
    {
        $dados = array();
        $dados['titulo'] = 'Meus Cursos';
        
        $this->carregarViews('meus_Cursos' , $dados);

    }
}
