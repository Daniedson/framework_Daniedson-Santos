<div id="main" class="container-fluid">

  <h3 class="page-header">Adicionar um Fornecedor</h3>

  <form action="<?=base_url('fornecedores/salvar')?>" method="post">
  	<div class="row">
          <div class="form-group col-md-4">
  	  	<label for="nome">Nome</label>
  	  	<input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o Nome">
          </div>
          <div class="form-group col-md-4">
  	  	<label for="cnpj">CNPJ</label>
  	  	<input type="text" name="cnpj" class="form-control" id="cnpj" placeholder="Digite o CNPJ">
          </div>
          <div class="form-group col-md-4">
  	  	<label for="telefone">Telefone</label>
  	  	<input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite o Telefone">
          </div>
	</div>
	<hr/>

	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Salvar Fornecedor</button>
		<a href="<?=base_url('fornecedores/index')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>
