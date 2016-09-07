<div id="main" class="container-fluid">

  <h3 class="page-header">Adicionar um Cliente</h3>

  <form action="<?=base_url(clientes/add)?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Nome do Cliente</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">CPF</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o CPF">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Endereço</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o endereço">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Bairro</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o Bairro">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Número de Telefone</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o Telefone">
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