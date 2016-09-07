<?php

class Itens extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

        public function index(){

            $this->render('itens/index');
	}

        public function add(){
            //função que carrega a view
            $this->render('itens/add');
        }
        public function edit(){
            $this->render('itens/edit');
        }
        public function delete(){

        }
}

?>