<?php

class LoginController extends Controller
{
    public function index()
    {
        $dados = array();
        $dados['titulo'] = 'Login';
        
        $this->carregarViews('login' , $dados);

    }
}
