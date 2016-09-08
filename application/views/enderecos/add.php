<div id="main" class="container-fluid">

  <h3 class="page-header">Adicionar um Endereço</h3>

   <form action="<?=base_url('enderecos/salvar')?>" method="post">
  	<div class="row">
          <div class="form-group col-md-4">
  	  	<label for="cep">CEP</label>
  	  	<input type="text" name="cep" class="form-control" id="cep" placeholder="Digite o CPF">
          </div>
          <div class="form-group col-md-4">
  	  	<label for="salario">Salário</label>
  	  	<input type="text" name="salario" class="form-control" id="salario" placeholder="Digite o Salário">
          </div>
	</div>
	<hr/>

	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Salvar Cargo</button>
		<a href="<?=base_url('cargos/index')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>
