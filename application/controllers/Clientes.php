<?php

class Clientes extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

    public function index() {
        $cliente = new Cliente();
        $cliente->get();
        $this->data = $cliente->all_to_array();
        $this->render('clientes/index');
    }

    public function add() {
        //função que carrega a view
       $this->render('clientes/add');
    }

    public function delete($parametro) {
        $cliente = new Cliente();
        $cliente->deleteById($parametro);
        $this->index();
    }

    public function viewSimples($parametro){
        $cliente = new Cliente();
        $cliente->getById($parametro);
        $this->data = $cliente->to_array();
        $this->render('clientes/viewSimples');
    }

    public function editar($parametro){
        $cliente = new Cliente();
        $cliente->getById($parametro);
        $this->data = $cliente->to_array();
        $this->render('clientes/editar');
    }

    public function atualizar(){
       $cliente = $this->post_to_obj(array('id','nome','cpf','telefone','renda','data_cadastro'), new Cliente());
       $cliente->update();
       $this->index();
       }

    public function salvar(){
        $cliente = $this->post_to_obj(array('nome','cpf','telefone','renda','data_cadastro'), new Cliente());
        $cliente->save();
        $this->index();
    }

}

?>