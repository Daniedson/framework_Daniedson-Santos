<?php

class Enderecos extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}
    public function index() {
        $endereco = new endereco();
        $endereco->get();
        $this->data = $endereco->all_to_array();
        $this->render('enderecos/index');
    }

    public function add() {
        //função que carrega a view
       $this->render('enderecos/add');
    }

    public function delete($parametro) {
        $endereco = new Endereco();
        $endereco->deleteById($parametro);
        $this->index();
    }

    public function viewSimples($parametro){
        $endereco = new Endereco();
        $endereco->getById($parametro);
        $this->data = $endereco->to_array();
        $this->render('enderecos/viewSimples');
    }

    public function editar($parametro){
        $endereco = new Endereco();
        $endereco->getById($parametro);
        $this->data = $endereco->to_array();
        $this->render('enderecos/editar');
    }

    public function atualizar(){
       $endereco = $this->post_to_obj(array('id','cep','logradouro','bairro','cidade','estado'),new Endereco());
       $endereco->update();
       $this->index();
       }

    public function salvar(){
        $endereco = $this->post_to_obj(array('cep','logradouro','bairro','cidade','estado'), new Endereco());
        $endereco->save();
        $this->index();
    }
}
?>