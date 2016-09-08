<div id="main" class="container-fluid">
    <h3 class="page-header">Detalhes do Endereço</h3>

    <div class="row">
        <div class="col-md-4">
            <p><strong>ID</strong></p>
            <p><?=$this->data['id']?></p>
        </div>

        <div class="col-md-4">
            <p><strong>CEP</strong></p>
            <p><?=$this->data['cep']?></p>
        </div>
        <div class="col-md-4">
            <p><strong>Logradouro</strong></p>
            <p><?=$this->data['logradouro']?></p>
        </div>
        <div class="col-md-4">
            <p><strong>Bairro</strong></p>
            <p><?=$this->data['bairro']?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Cidade</strong></p>
            <p><?=$this->data['cidade']?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Estado</strong></p>
            <p><?=$this->data['estado']?></p>
        </div>
</div>

    <hr />
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="<?=base_url('enderecos/editar/'.$this->data['id'])?>" class="btn btn-primary">Editar</a>
            <a href="<?=base_url('enderecos/index')?>" class="btn btn-default">Fechar</a>
        </div>
    </div>
</div>