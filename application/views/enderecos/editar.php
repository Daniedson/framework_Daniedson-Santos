<div id="main" class="container-fluid">

  <h3 class="page-header">Editar Endereço</h3>

  <form action="<?=  base_url('enderecos/atualizar')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="id">ID</label>
  	  	<input type="text" name="id" class="form-control" id="id" readonly value="<?=$this->data['id']?>">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="cep">CEP</label>
  	  	<input type="text" name="cep" class="form-control" id="cep" value="<?=$this->data['cep']?>">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="logradouro">Logradouro</label>
  	  	<input type="text" name="logradouro" class="form-control" id="logradouro" value="<?=$this->data['logradouro']?>">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="bairro">Bairro</label>
  	  	<input type="text" name="bairro" class="form-control" id="bairro" value="<?=$this->data['bairro']?>">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="cidade">Cidade</label>
  	  	<input type="text" name="cidade" class="form-control" id="cidade" value="<?=$this->data['cidade']?>">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="estado">Estado</label>
  	  	<input type="text" name="estado" class="form-control" id="estado" value="<?=$this->data['estado']?>">
  	  </div>
	</div>
	<hr />

	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?=base_url('enderecos/index')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>