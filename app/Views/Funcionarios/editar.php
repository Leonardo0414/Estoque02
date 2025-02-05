
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

            <!-- IF DE RETORNO -->
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

            <!-- FORMULARIO -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Editar Funcionário</h3>
                        </div>
                        <div class="card-body">
                            <?= $funcionario['id_funcionario'] ?>
                                <form action="/funcionarios/store" method="post">
                                <div class="row">
                                 
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input type="text" class="form-control" name="nome" value="<?= $funcionario['nome'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Data de Nascimento</label>
                                            <input type="date" class="form-control" name="data_de_nascimento" value="<?= $funcionario['data_de_nascimento'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                   
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>RG</label>
                                            <input type="text" class="form-control" name="rg" value="<?= $funcionario['rg'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>CPF</label>
                                            <input type="text" class="form-control" name="cpf" value="<?= $funcionario['cpf'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Telefone</label>
                                            <input type="text" class="form-control" name="telefone" value="<?= $funcionario['telefone'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                            
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Endereço</label>
                                            <input type="text" class="form-control" name="endereco" value="<?= $funcionario['endereco'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Data de Contratação</label>
                                            <input type="date" class="form-control" name="data_de_contratacao" value="<?= $funcionario['data_de_contratacao'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Cargo</label>
                                            <input type="text" class="form-control" name="cargo" value="<?= $funcionario['cargo'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Salário</label>
                                            <input type="number" step="0.01" class="form-control" name="salario" value="<?= $funcionario['salario'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Dia de Pagamento</label>
                                            <input type="number" min="1" max="31" class="form-control" name="dia_de_pagamento" value="<?= $funcionario['dia_de_pagamento'] ?>">
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