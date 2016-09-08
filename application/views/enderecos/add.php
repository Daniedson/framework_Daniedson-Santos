<div id="main" class="container-fluid">

  <h3 class="page-header">Adicionar um Endereço</h3>

  <form action="<?=base_url(enderecos/add)?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">CEP</label>
  	  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o CEP">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="logradouro">Logradouro</label>
  	  	<input type="text" class="form-control" id="logradouro" placeholder="Digite o Bairro">
          </div>
	</div>
	<hr />

	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Salvar</button>
		<a href="template.html" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>
