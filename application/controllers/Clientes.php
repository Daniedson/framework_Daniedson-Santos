<?php

class Clientes extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

        public function index(){

            $this->render('clientes/index');
	}

        public function add(){
            //função que carrega a view
            $this->render('clientes/add');
        }
        public function edit(){
            $this->render('clientes/edit');
        }
        public function delete(){

        }
}

?>