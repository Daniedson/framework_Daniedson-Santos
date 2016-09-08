<?php

class funcionarios extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $funcionario = new Funcionario();
        $funcionario->get();
        $this->data = $funcionario->all_to_array();
        $this->render('funcionarios/index');
    }

    public function add() {
        //função que carrega a view
       $this->render('funcionarios/add');
    }

    public function delete($parametro) {
        $funcionario = new Funcionario();
        $funcionario->deleteById($parametro);
        $this->index();
    }

    public function viewSimples($parametro){
        $funcionario = new Funcionario();
        $funcionario->getById($parametro);
        $this->data = $funcionario->to_array();
        $this->render('funcionarios/viewSimples');
    }

    public function editar($parametro){
        $funcionario = new Funcionario();
        $funcionario->getById($parametro);
        $this->data = $funcionario->to_array();
        $this->render('funcionarios/editar');
    }

    public function atualizar(){
       $funcionario = $this->post_to_obj(array('id','nome','entrada','telefone'), new Funcionario());
       $funcionario->update();
       $this->index();
       }

    public function salvar(){
        $funcionario = $this->post_to_obj(array('nome','entrada','telefone'), new Funcionario());
        $funcionario->save();
        $this->index();
    }

}

?>