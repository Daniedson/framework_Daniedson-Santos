<div id="main" class="container-fluid">

  <h3 class="page-header">Adicionar um Funcionário</h3>

  <form action="<?=base_url('funcionarios/salvar')?>" method="post">
  	<div class="row">
          <div class="form-group col-md-4">
  	  	<label for="nome">Nome</label>
  	  	<input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o Nome">
          </div>
          <div class="form-group col-md-4">
  	  	<label for="entrada">Entrada</label>
  	  	<input type="text" name="entrada" class="form-control" id="entrada" placeholder="Digite a Entrada">
          </div>
          <div class="form-group col-md-4">
  	  	<label for="telefone">Telefone</label>
  	  	<input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite o Telefone">
          </div>
	</div>
	<hr/>

	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Salvar Funcionário</button>
		<a href="<?=base_url('funcionarios/index')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>
