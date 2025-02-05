<?php 
// LOGIN
use App\Models\Login\LoginModel;
$login_model = new LoginModel();
$usuario = $login_model->find(1);
?>
<!-- NAVEGACAO -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Trocar Senha</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/inicio">Início</a></li>
            <li class="breadcrumb-item active">Trocar Senha</li>
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

      <?php if (isset($alert)) : ?>
        <?php if ($alert == 'success_trocar_senha') : ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Senha atualizada com sucesso!
          </div>
        <?php elseif ($alert == 'error_trocar_senha') : ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Erro ao atualizar senha. Verifique os dados informados!
          </div>
        <?php endif; ?>
      <?php endif; ?>

      <div class="row">
        <div class="col-lg-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"><?= $usuario['senha'] === null ? 'Definir Senha' : 'Alterar Senha' ?></h3>
            </div>

            <!-- FORMULARIO -->
            <form action="/login/store" method="post">
              <?= csrf_field() ?>
              <div class="card-body">
                <?php if ($usuario['senha'] !== null): ?>
                  <div class="form-group">
                    <label>Senha Atual</label>
                    <input type="password" class="form-control" name="senha_atual" required>
                  </div>
                <?php else: ?>
                  <input type="hidden" name="senha_atual" value="">
                <?php endif; ?>
                
                <div class="form-group">
                  <label>Nova Senha</label>
                  <input type="password" class="form-control" name="nova_senha" required>
                </div>

                <div class="form-group">
                  <label>Confirmar Nova Senha</label>
                  <input type="password" class="form-control" name="confirmar_nova_senha" required>
                </div>
              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                  <i class="fas fa-save"></i> <?= $usuario['senha'] === null ? 'Salvar Senha' : 'Salvar Nova Senha' ?>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>