<div id="main" class="container-fluid">

  <h3 class="page-header">Adicionar um Endereço</h3>

   <form action="<?=base_url('enderecos/salvar')?>" method="post">
  	<div class="row">
          <div class="form-group col-md-4">
  	  	<label for="cep">CEP</label>
  	  	<input type="text" name="cep" class="form-control" id="cep" placeholder="Digite o CPF">
          </div>
          <div class="form-group col-md-4">
  	  	<label for="logradouro">Logradouro</label>
  	  	<input type="text" name="logradouro" class="form-control" id="logradouro" placeholder="Digite o logradouro">
          </div>
          <div class="form-group col-md-4">
  	  	<label for="bairro">Bairro</label>
  	  	<input type="text" name="bairro" class="form-control" id="bairro" placeholder="Digite o bairro">
          </div>
          <div class="form-group col-md-4">
  	  	<label for="cidade">Cidade</label>
  	  	<input type="text" name="cidade" class="form-control" id="cidade" placeholder="Digite a Cidade">
          </div>
          <div class="form-group col-md-4">
  	  	<label for="estado">Estado</label>
  	  	<input type="text" name="estado" class="form-control" id="estado" placeholder="Digite o Estado">
          </div>
	</div>
	<hr/>

	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Salvar Endereço</button>
		<a href="<?=base_url('enderecos/index')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>
