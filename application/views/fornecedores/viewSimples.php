<div id="main" class="container-fluid">
    <h3 class="page-header">Detalhes do Fornecedor</h3>

    <div class="row">
        <div class="col-md-4">
            <p><strong>ID</strong></p>
            <p><?=$this->data['id']?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Nome</strong></p>
            <p><?=$this->data['nome']?></p>
        </div>

        <div class="col-md-4">
            <p><strong>CNPJ</strong></p>
            <p><?=$this->data['cnpj']?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Telefone</strong></p>
            <p><?=$this->data['telefone']?></p>
        </div>
</div>

    <hr />
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="<?=base_url('fornecedores/editar/'.$this->data['id'])?>" class="btn btn-primary">Editar</a>
            <a href="<?=base_url('fornecedores/index')?>" class="btn btn-default">Fechar</a>
        </div>
    </div>
</div>