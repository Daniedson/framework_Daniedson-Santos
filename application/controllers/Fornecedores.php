<?php

class Fornecedores extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $fornecedor = new Fornecedor();
        $fornecedor->get();
        $this->data = $fornecedor->all_to_array();
        $this->render('fornecedores/index');
    }

    public function add() {
        //função que carrega a view
       $this->render('fornecedores/add');
    }

    public function delete($parametro) {
        $fornecedor = new Fornecedor();
        $fornecedor->deleteById($parametro);
        $this->index();
    }

    public function viewSimples($parametro){
        $fornecedor = new Fornecedor();
        $fornecedor->getById($parametro);
        $this->data = $fornecedor->to_array();
        $this->render('fornecedores/viewSimples');
    }

    public function editar($parametro){
        $fornecedores = new Fornecedor();
        $fornecedores->getById($parametro);
        $this->data = $fornecedores->to_array();
        $this->render('fornecedores/editar');
    }

    public function atualizar(){
       $fornecedor = $this->post_to_obj(array('id','nome','cnpj','telefone'),new Fornecedor());
       $fornecedor->update();
       $this->index();
       }

    public function salvar(){
        $fornecedor = $this->post_to_obj(array('nome','cnpj','telefone'), new Fornecedor());
        $fornecedor->save();
        $this->index();
    }

}

?>