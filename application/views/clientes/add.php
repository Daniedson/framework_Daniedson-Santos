<div id="main" class="container-fluid">

  <h3 class="page-header">Adicionar Clientes</h3>

  <form action="<?=base_url('clientes/salvar')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome Clientes</label>
  	  	<input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome">
          </div>
	</div>
        <div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="cpf">CPF</label>
  	  	<input type="text" name="cpf" class="form-control" id="cpf" placeholder="Digite o CPF">
          </div>
	</div>
        <div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="telefone">Telefone</label>
  	  	<input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite o telefone">
          </div>
	</div>
        <div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="renda">Renda</label>
  	  	<input type="text" name="renda" class="form-control" id="renda" placeholder="Digite a renda">
          </div>
	</div>
        <div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="data">Data do Cadastro</label>
  	  	<input type="text" name="data" class="form-control" id="data" placeholder="Digite a data">
          </div>
	</div>

	<hr />

	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Salvar</button>
		<a href="<?=base_url('clientes/index')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>
