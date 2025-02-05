<!--NAVEGACAO-->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Produtos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/inicio">Início</a></li>
                        <li class="breadcrumb-item active">Produtos</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">

            <?php
            $session = session();
            $alert = $session->get('alert');
            ?>

            <!-- MENSAGEM -->
            <?php if (isset($alert)): ?>
                <?php if ($alert == 'sucess_create'): ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Produto cadastrado com sucesso!
                    </div>
                <?php elseif ($alert == 'sucess_delete'): ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Produto removido com sucesso!
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <!-- EDITAR -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Editar Produto</h3>
                        </div>
                        <div class="card-body">
                       <form action="/produtos/store" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input type="text" class="form-control" name="nome" value="<?= $produto['nome'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Descrição</label>
                                            <input type="text" class="form-control" name="descricao" value="<?= $produto['descricao'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Quantidade</label>
                                            <input type="number" class="form-control" name="quantidade" value="<?= $produto['quantidade'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Quantidade Mínima</label>
                                            <input type="number" class="form-control" name="quantidade_minima" value="<?= $produto['quantidade_minima'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Validade</label>
                                            <input type="date" class="form-control" name="validade" value="<?= $produto['validade'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Valor de Compra</label>
                                            <input type="text" class="form-control" name="valor_de_compra" value="<?= $produto['valor_de_compra'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Valor de Venda</label>
                                            <input type="text" class="form-control" name="valor_de_venda" value="<?= $produto['valor_de_venda'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar Alterações</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
