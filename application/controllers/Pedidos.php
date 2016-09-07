<?php

class Pedidos extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

        public function index(){

            $this->render('pedidos/index');
	}

        public function add(){
            //função que carrega a view
            $this->render('pedidos/add');
        }
        public function edit(){
            $this->render('pedidos/edit');
        }
        public function delete(){

        }
}

?>