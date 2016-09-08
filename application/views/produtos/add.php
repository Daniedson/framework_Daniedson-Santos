<div id="main" class="container-fluid">

  <h3 class="page-header">Adicionar Produtos</h3>

  <form action="<?=base_url(produtos/add)?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Nome Produto</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Descrição</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite a descrição">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Valor</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
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