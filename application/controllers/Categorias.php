<?php

class Categorias extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

    public function index() {
        $categoria = new Categoria();
        $categoria->get();
        $this->data = $categoria->all_to_array();
        $this->render('categorias/index');
    }

    public function add() {
        //função que carrega a view
       $this->render('categorias/add');
    }

    public function delete($parametro) {
        $categoria = new Categoria();
        $categoria->deleteById($parametro);
        $this->index();
    }

    public function viewSimples($parametro){
        $categoria = new Categoria();
        $categoria->getById($parametro);
        $this->data = $categoria->to_array();
        $this->render('categorias/viewSimples');
    }

    public function editar($parametro){
        $categoria = new Categoria();
        $categoria->getById($parametro);
        $this->data = $categoria->to_array();
        $this->render('categorias/editar');
    }

    public function atualizar(){
       $categoria = $this->post_to_obj(array('id','nome'),new Categoria());
       $categoria->update();
       $this->index();
       }

    public function salvar(){
        $categoria = $this->post_to_obj(array('nome'), new Categoria());
        $categoria->save();
        $this->index();
    }

}

?>