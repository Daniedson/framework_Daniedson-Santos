<div id="main" class="container-fluid">

  <h3 class="page-header">Editar Fornecedor</h3>

  <form action="<?=  base_url('fornecedores/atualizar')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="id">ID</label>
  	  	<input type="text" name="id" class="form-control" id="id" readonly value="<?=$this->data['id']?>">
  	  </div>
  	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome</label>
  	  	<input type="text" name="nome" class="form-control" id="nome" value="<?=$this->data['nome']?>">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="cnpj">CNPJ</label>
  	  	<input type="text" name="cnpj" class="form-control" id="cnpj" value="<?=$this->data['cnpj']?>">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="telefone">Telefone</label>
  	  	<input type="text" name="telefone" class="form-control" id="telefone" value="<?=$this->data['telefone']?>">
  	  </div>
	</div>
	<hr />

	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?=base_url('fornecedores/index')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>
