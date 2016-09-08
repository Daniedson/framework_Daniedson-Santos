<div id="main" class="container-fluid">

  <h3 class="page-header">Editar Funcionário</h3>

  <form action="<?=  base_url('funcionarios/atualizar')?>" method="post">
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
  	  	<label for="entrada">Entrada</label>
  	  	<input type="text" name="entrada" class="form-control" id="entrada" value="<?=$this->data['entrada']?>">
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
                <a href="<?=base_url('funcionarios/index')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>