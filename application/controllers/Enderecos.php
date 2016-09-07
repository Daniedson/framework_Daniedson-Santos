<?php

class Enderecos extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

            public function index(){

            $this->render('enderecos/index');
	}

        public function add(){
            //função que carrega a view
            $this->render('enderecos/add');
        }
        public function edit(){
            $this->render('enderecos/edit');
        }
        public function delete(){

        }
}

?>