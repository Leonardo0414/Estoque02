<!-- EXCLUIR -->
<div class="modal fade" id="modal-confimacao-delte">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Confirme sua ação</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form action="/funcionarios/excluir" method="post">
                <div class="modal-body">
                    <p>Deseja realmente excluir este funcionário?</p>
                    <input type="hidden" id="id_funcionario" name="id_funcionario" value="">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Sim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Funcionários</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/inicio">Início</a></li>
                        <li class="breadcrumb-item active">Funcionários</li>
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

            <!--IF RETORNO -->
            <?php if (isset($alert)): ?>
                <?php if ($alert == 'sucess_create'): ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Funcionário cadastrado com sucesso!
                    </div>
                <?php elseif ($alert == 'sucess_delete'): ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Funcionário removido com sucesso!
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <!-- TABELA DE FUNCIONARIOS -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="/funcionarios/novo" class="btn btn-info">
                                <i class="fas fa-user-plus"></i> Novo Funcionário
                            </a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">Código</th>
                                        <th>Nome</th>
                                        <th>Data de Nascimento</th>
                                        <th>Telefone</th>
                                        <th>Endereço</th>
                                        <th>Data de Contratação</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($funcionarios)): ?>
                                        <?php foreach ($funcionarios as $funcionario): ?>
                                            <tr>
                                                <td><?= $funcionario['id_funcionario'] ?></td>
                                                <td><?= $funcionario['nome'] ?></td>
                                                <td><?= $funcionario['data_de_nascimento'] ?></td>
                                                <td><?= $funcionario['telefone'] ?></td>
                                                <td><?= $funcionario['endereco'] ?></td>
                                                <td><?= $funcionario['data_de_contratacao'] ?></td>
                                                <td>
                                                    <a href="/funcionarios/ver/<?= $funcionario['id_funcionario'] ?>" class="btn btn-primary">
                                                        <i class="fas fa-search"></i> Ver
                                                    </a>
                                                    <a href="/funcionarios/editar/<?= $funcionario['id_funcionario'] ?>" class="btn btn-warning">
                                                        <i class="fas fa-edit"></i> Editar
                                                    </a>
                                                    <button type="button" class="btn btn-danger" 
                                                            onclick="document.getElementById('id_funcionario').value = '<?= $funcionario['id_funcionario'] ?>'" 
                                                            data-toggle="modal" data-target="#modal-confimacao-delte">
                                                        <i class="fas fa-trash-alt"></i> Excluir
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="7" class="text-center">Nenhum funcionário cadastrado</td>
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
