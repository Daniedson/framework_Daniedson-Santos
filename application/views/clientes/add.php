<div id="main" class="container-fluid">

  <h3 class="page-header">Adicionar um Cliente</h3>

  <form action="<?=base_url(clientes/add)?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Nome do Cliente</label>
  	  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">CPF</label>
  	  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o CPF">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Número de telefone</label>
  	  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o Telefone">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Renda</label>
  	  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite a Renda">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Data Atual</label>
  	  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite a Data">
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