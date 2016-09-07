<?php

class Categorias extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

        public function index(){

            $this->render('categorias/index');
	}

        public function add(){
            //função que carrega a view
            $this->render('categorias/add');
        }
        public function edit(){
            $this->render('categorias/edit');
        }
        public function delete(){

        }
}

?>