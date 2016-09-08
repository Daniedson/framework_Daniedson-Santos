<div id="main" class="container-fluid">

  <h3 class="page-header">Adicionar Fornecedor</h3>

  <form action="<?=base_url(fornecedores/add)?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Nome ou Razão Social</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome/razão social">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">CNPJ ou CPF</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o CNPJ ou CPF">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Telefone</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o telefone">
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
