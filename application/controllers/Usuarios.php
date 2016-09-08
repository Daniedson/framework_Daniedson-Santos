<?php

class Usuarios extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $usuario = new Usuario();
        $usuario->get();
        $this->data = $usuario->all_to_array();
        $this->render('usuarios/index');
    }

    public function add() {
        //função que carrega a view
       $this->render('usuarios/add');
    }

    public function delete($parametro) {
        $usuario = new Usuario();
        $usuario->deleteById($parametro);
        $this->index();
    }

    public function viewSimples($parametro){
        $usuario = new Usuario();
        $usuario->getById($parametro);
        $this->data = $usuario->to_array();
        $this->render('usuarios/viewSimples');
    }

    public function editar($parametro){
        $usuario = new Usuario();
        $usuario->getById($parametro);
        $this->data = $usuario->to_array();
        $this->render('usuarios/editar');
    }

    public function atualizar(){
       $usuarios = $this->post_to_obj(array('id','nome','login','senha','grupo'),new Usuario());
       $usuarios->update();
       $this->index();
       }

    public function salvar(){
        $cargo = $this->post_to_obj(array('nome','login','senha','grupo'), new Usuario());
        $cargo->save();
        $this->index();
    }

}

?>