<div id="main" class="container-fluid">

  <h3 class="page-header">Editar Categoria</h3>

  <form action="<?=  base_url('categorias/atualizar')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="id">ID</label>
  	  	<input type="text" name="id" class="form-control" id="id" readonly value="<?=$this->data['id']?>">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome Categoria</label>
  	  	<input type="text" name="nome" class="form-control" id="nome" value="<?=$this->data['nome']?>">
          </div>
	</div>
	<hr />

	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?=base_url('categorias/index')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>