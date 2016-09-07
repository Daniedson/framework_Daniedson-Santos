<?php

class Funcionarios extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

	public function index(){

            $this->render('funcionarios/index');
	}

        public function add(){
            //função que carrega a view
            $this->render('funcionarios/add');
        }
        public function edit(){
            $this->render('funcionarios/edit');
        }
        public function delete(){

        }
}

?>