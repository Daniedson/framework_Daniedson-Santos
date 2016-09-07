<div id="main" class="container-fluid">

  <h3 class="page-header">Adicionar um Cargo</h3>

  <form action="<?=base_url(cargos/add)?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Descrição</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite a Descrição">
          </div>

	</div>
	<hr />

	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Salvar Cargo</button>
		<a href="template.html" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>
