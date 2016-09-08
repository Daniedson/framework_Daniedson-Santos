<?php

class Pedidos extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $pedido = new pedido();
        $pedido->get();
        $this->data = $pedido->all_to_array();
        $this->render('pedidos/index');
    }

    public function add() {
        //função que carrega a view
       $this->render('pedidos/add');
    }

    public function delete($parametro) {
        $pedido = new Pedido();
        $pedido->deleteById($parametro);
        $this->index();
    }

    public function viewSimples($parametro){
        $pedido = new Pedido();
        $pedido->getById($parametro);
        $this->data = $pedido->to_array();
        $this->render('pedidos/viewSimples');
    }

    public function editar($parametro){
        $pedido = new Pedido();
        $pedido->getById($parametro);
        $this->data = $pedido->to_array();
        $this->render('pedidos/editar');
    }

    public function atualizar(){
       $pedido = $this->post_to_obj(array('id'),new Cargo());
       $pedido->update();
       $this->index();
       }

}

?>