<?php

class Cargos extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $cargo = new cargo();
        $cargo->get();
        $this->data = $cargo->all_to_array();
        $this->render('cargos/index');
    }

    public function add() {
        //função que carrega a view
       $this->render('cargos/add');       
    }

    public function delete($parametro) {
        $cargo = new Cargo();
        $cargo->deleteById($parametro);
        $this->index();
    }

    public function viewSimples($parametro){
        $cargo = new Cargo();
        $cargo->getById($parametro);
        $this->data = $cargo->to_array();
        $this->render('cargos/viewSimples');
    }

    public function editar($parametro){
        $cargo = new Cargo();
        $cargo->getById($parametro);
        $this->data = $cargo->to_array();
        $this->render('cargos/editar');
    }

    public function atualizar(){
       $cargo = $this->post_to_obj(array('id','descricao','salario'),new Cargo());
       $cargo->update();
       $this->index();
       }

    public function salvar(){
        $cargo = $this->post_to_obj(array('descricao','salario'), new Cargo());
        $cargo->save();
        $this->index();
    }

}

?>