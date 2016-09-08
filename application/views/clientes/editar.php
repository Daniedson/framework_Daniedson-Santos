<div id="main" class="container-fluid">

  <h3 class="page-header">Editar Cliente</h3>

  <form action="<?= base_url('clientes/atualizar')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="id">ID</label>
  	  	<input type="text" name="id" class="form-control" id="id" readonly value="<?=$this->data['id']?>">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome Cliente</label>
  	  	<input type="text" name="nome" class="form-control" id="nome" value="<?=$this->data['nome']?>">
          </div>
             <div class="form-group col-md-4">
  	  	<label for="cpf">CPF</label>
  	  	<input type="text" name="cpf" class="form-control" id="cpf" value="<?=$this->data['cpf']?>">
          </div>
             <div class="form-group col-md-4">
  	  	<label for="telefone">Telefone</label>
  	  	<input type="text" name="telefone" class="form-control" id="telefone" value="<?=$this->data['telefone']?>">
          </div>
             <div class="form-group col-md-4">
  	  	<label for="renda">Renda</label>
  	  	<input type="text" name="renda" class="form-control" id="renda" value="<?=$this->data['renda']?>">
          </div>
             <div class="form-group col-md-4">
  	  	<label for="data_cadastro">Data Cadastro</label>
  	  	<input type="date" name="data_cadastro" class="form-control" id="data_cadastro" value="<?=$this->data['data_cadastro']?>">
          </div>
	</div>
	<hr />

	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?=base_url('clientes/index')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>