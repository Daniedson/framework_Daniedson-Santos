<?php

class Produtos extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}
        
    public function index() {
        $produto = new Produto();
        $produto->get();
        $this->data = $produto->all_to_array();
        $this->render('produtos/index');
    }

    public function add() {
        //função que carrega a view
       $this->render('produtos/add');
    }

    public function delete($parametro) {
        $produto = new Produto();
        $produto->deleteById($parametro);
        $this->index();
    }

    public function viewSimples($parametro){
        $produto = new Produto();
        $produto->getById($parametro);
        $this->data = $produto->to_array();
        $this->render('produtos/viewSimples');
    }

    public function editar($parametro){
        $produto = new Produto();
        $produto->getById($parametro);
        $this->data = $produto->to_array();
        $this->render('produtos/editar');
    }

    public function atualizar(){
       $produto = $this->post_to_obj(array('id','descricao','quantidade','valor'),new Produto());
       $produto->update();
       $this->index();
       }

    public function salvar(){
        $produto = $this->post_to_obj(array('descricao','quantidade','valor'), new Produto());
        $produto->save();
        $this->index();
    }

}

?>