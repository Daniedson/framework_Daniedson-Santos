<div id="main" class="container-fluid">

  <h3 class="page-header">Editar Item</h3>

  <form action="<?=  base_url('cargos/atualizar')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="id">ID</label>
  	  	<input type="text" name="id" class="form-control" id="id" readonly value="<?=$this->data['id']?>">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="descricao">Descrição</label>
  	  	<input type="text" name="descricao" class="form-control" id="descricao" value="<?=$this->data['descricao']?>">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="salario">Salário</label>
  	  	<input type="text" name="salario" class="form-control" id="salario" value="<?=$this->data['salario']?>">
  	  </div>
	</div>
	<hr />

	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?=base_url('cargos/index')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>