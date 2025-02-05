<!-- MODAL DE EXCLUIR -->
<div class="modal fade" id="modal-confimacao-delte">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Confirme sua ação</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/produtos/excluir" method="post">
                <div class="modal-body">
                    <p>Deseja realmente excluir este produto?</p>
                    <input type="hidden" id="id_produto" name="id_produto" value="">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Sim</button>
                </div>
            </form>
        </div>
    </div>
</div>
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

            <!-- MENSAGEM-->
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

            <!-- TABELA-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="/produtos/novo" class="btn btn-info">
                                <i class="fas fa-plus"></i> Novo Produto
                            </a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">Código</th>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th>Quantidade</th>
                                        <th>Valor de Compra</th>
                                        <th>Valor de Venda</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($produtos)): ?>
                                        <?php foreach ($produtos as $produto): ?>
                                            <tr>
                                                <td><?= $produto['id_produto'] ?></td>
                                                <td><?= $produto['nome'] ?></td>
                                                <td><?= $produto['descricao'] ?></td>
                                                <td><?= $produto['quantidade'] ?></td>
                                                <td><?= number_format($produto['valor_de_compra'], 2, ',', '.') ?></td>
                                                <td><?= number_format($produto['valor_de_venda'], 2, ',', '.') ?></td>
                                                <td>
                                                    <a href="/produtos/ver/<?= $produto['id_produto'] ?>" class="btn btn-primary">
                                                        <i class="fas fa-search"></i> Ver
                                                    </a>
                                                    <a href="/produtos/editar/<?= $produto['id_produto'] ?>" class="btn btn-warning">
                                                        <i class="fas fa-edit"></i> Editar
                                                    </a>
                                                    <button type="button" class="btn btn-danger" 
                                                            onclick="document.getElementById('id_produto').value = '<?= $produto['id_produto'] ?>'" 
                                                            data-toggle="modal" data-target="#modal-confimacao-delte">
                                                        <i class="fas fa-trash-alt"></i> Excluir
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="7" class="text-center">Nenhum produto cadastrado</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
