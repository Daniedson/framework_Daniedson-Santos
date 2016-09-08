<div id="main" class="container-fluid">
    <h3 class="page-header">Detalhes da Categoria</h3>

    <div class="row">
        <div class="col-md-4">
            <p><strong>ID</strong></p>
            <p><?=$this->data['id']?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Nome Categoria</strong></p>
            <p><?=$this->data['nome']?></p>
        </div>
</div>

    <hr />
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="<?=base_url('categorias/editar/'.$this->data['id'])?>" class="btn btn-primary">Editar</a>
            <a href="<?=base_url('categorias/index')?>" class="btn btn-default">Fechar</a>
        </div>
    </div>
</div>